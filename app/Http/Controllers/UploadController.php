<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;

class UploadController extends Controller
{
	public function upload(){
        $item = Item::get();
		return view('upload',['item'=>$item]);
	}

	public function proses_upload(Request $request){
		$this->validate($request, [
			'nama_buku' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'nomor_telepon' => 'required',
            'alamat' => 'required',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
		Item::create([
            'nama_buku' => $request->nama_buku,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'nomor_telepon' => $request->nomor_telepon,
            'alamat' => $request->alamat,
			'file' => $nama_file,
			
		]);
 
		return redirect('lamanjualan');
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
		'no_telepon' => ['required','max:20'],
		'alamat'=>['required','string'],
		'file'=>['required','file'],
    ]);

    $id = $request->input('id');
    $data=array(
		'nama_buku'=>$request->input('nama_buku'),
		'harga'=>$request->input('harga'),
		'deskripsi'=>$request->input('deskripsi'),
        'no_telepon'=>$request->input('no_telepon'),
        'alamat'=>$request->input('alamat'),
        'file'=>$request->input('file'),
    );

    Item::find($id)->update($data);
    return redirect('/lamanjualan');
}
	


}