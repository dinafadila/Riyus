<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iluminate\Support\Facades\Storage;

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

    public function edit_buku($id)
	{
		$item = Item::where('id',$id)->first();
		return view('editbuku',compact('item'));
	}

	public function update_buku($id, Request $request)
{
    $this->validate($request,[
        'nama_buku' => ['required', 'string', 'max:255'],
        'harga'=> ['required', 'string', 'max:20'],
        'deskripsi' =>['required', 'string', 'max:500'],
		'nomor_telepon' => ['required','max:20'],
		'alamat'=>['required','string'],
		'file'=>[],
    ]);
        
    $file = Item::findOrFail($id);
  
    $file->nama_buku = $request->input('nama_buku');
    $file->harga = $request->input('harga');
    $file->deskripsi = $request->input('deskripsi');
    $file->nomor_telepon = $request->input('nomor_telepon');
    $file->alamat = $request->input('alamat');
    $exist = Storage::disk('local')->exists('file',$file->file);
    if($exist){
        Storage::disk('local')->delete('file',$file->file);
    }
    if($request->hasFile('file')){
        $name = Storage::disk('local')->put('file', $request->file);
        $file->file = $name;
    }
    $file->save();
    return redirect('lamanjualan');
}


    public function delete_buku($id)
{
        $item = Item::where('id', $id)->first();
        $item->delete();
            return redirect('/lamanjualan');
}

}