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

    public function detail_item(Request $request, $id){

        
        
        $item = Item::where('id', $id)->first();
        
        // if($item === NULL){
        //     return redirect('/beli')->with('danger','No book found');
        // }
        
        // $users = Auth::user()->id;
        

        
        return view('display', compact('item'));

    }

}