<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iluminate\Support\Facades\Storage;
use Auth;
use App\User;

use App\Item;

class ItemController extends Controller
{

    public function index()
    {
    	if(Auth::user()){
            $item= Item:: orderBy('created_at', 'desc'); // ->paginate(6);
            $usr = Auth::user('id');
            $user_id = auth()->user()->id;
            $user = User::find($user_id);
            return view('lamanjualan', compact('usr'))->with('item', $user->item);
          // )->with('item',$user->item);
                } else 
            return redirect('/login');
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

    public function edit_buku($id)
	{
		$item = Item::where('id',$id)->first();
		return view('editbuku',compact('item'));
	}

	


    public function delete_buku($id)
{
        $item = Item::where('id', $id)->first();
        $item->delete();
            return redirect('/lamanjualan');
}

}