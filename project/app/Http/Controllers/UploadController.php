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
		$tujuan_upload = 'storage';
		$file->move($tujuan_upload,$nama_file);
 
		Item::create([
            'nama_buku' => $request->nama_buku,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'nomor_telepon' => $request->nomor_telepon,
            'alamat' => $request->alamat,
			'file' => $file,
			
		]);
 
		return redirect()->back();
	}
}