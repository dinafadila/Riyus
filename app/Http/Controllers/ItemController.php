<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;

class ItemController extends Controller
{

    public function index()
    {
    	$item = Item::all();
    	return view('lamanjualan', ['item' => $item]);
    }

    public function beli()
    {
    	$item = Item::all();
    	return view('beli', ['item' => $item]);
    }

    public function detail_item(Request $request, $id)
    {
        $item = Item::where('id', $id)->first();
        return view('display', compact('item'));
    }

    public function delete_buku($id)
{
        $item = Item::where('id', $id)->first();
        $item->delete();
            return redirect('/lamanjualan');
}

}