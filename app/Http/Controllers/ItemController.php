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
		'file'=>['required'],
    ]);

    $file = $request->file;
 
		$nama_file = time()."_".$file->getClientOriginalExtension();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

    $id = $request->input('id');
    $data=array(
		'nama_buku'=>$request->input('nama_buku'),
		'harga'=>$request->input('harga'),
		'deskripsi'=>$request->input('deskripsi'),
        'nomor_telepon'=>$request->input('nomor_telepon'),
        'alamat'=>$request->input('alamat'),
        'file'=>$request->input('file'),
    );

   

    

    Item::find($id)->update($data);
    return redirect('/lamanjualan');
}

    public function delete_buku($id)
{
        $item = Item::where('id', $id)->first();
        $item->delete();
            return redirect('/lamanjualan');
}

}