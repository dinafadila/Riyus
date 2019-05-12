<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Item;

class UploadController extends Controller
{
	public function upload(){
        $item = Item::get();
		return view('upload',['item'=>$item]);
	}

	public function proses_upload(Request $request){
		$this->validate($request, [
			'nama_buku' => ['required', 'string', 'max:255'],
			'harga'=> ['required', 'string', 'max:20'],
			'deskripsi' =>['required', 'string', 'max:500'],
			'nomor_telepon' => ['required','max:20'],
			'alamat'=>['required','string'],
			'file'=>'required|file|image|mimes:jpeg,png,jpg|max:2048',
		]);

		$item = new Item;
		$item->nama_buku = $request->input('nama_buku');
		$item->harga = $request->input('harga');
		$item->deskripsi = $request->input('deskripsi');
		$item->nomor_telepon = $request->input('nomor_telepon');
		$item->alamat = $request->input('alamat');
        $exist = Storage::disk('local')->exists('Items',$item->file);
        if($exist){
            Storage::disk('local')->delete('Items',$item->file);
        }
        if($request->hasFile('file')){
            $name = Storage::disk('local')->put('Items', $request->file);
            $item->file = $name;
        }
		$item->save();
        return redirect()->route('sell')->withInfo('Post berhasil ditambahkan');
	}

	public function update_buku(Request $request, $id){
		$this->validate($request, [
			'nama_buku' => ['required', 'string', 'max:255'],
			'harga'=> ['required', 'string', 'max:20'],
			'deskripsi' =>['required', 'string', 'max:500'],
			'nomor_telepon' => ['required','max:20'],
			'alamat'=>['required','string'],
			'file'=>'file|image|mimes:jpeg,png,jpg|max:2048',
		]);

		$item = Item::findOrFail($id);
		$item->nama_buku = $request->input('nama_buku');
		$item->harga = $request->input('harga');
		$item->deskripsi = $request->input('deskripsi');
		$item->nomor_telepon = $request->input('nomor_telepon');
		$item->alamat = $request->input('alamat');
        // $exist = Storage::disk('local')->exists('Items',$item->file);
        // if($exist){
        //     Storage::disk('local')->delete('Items',$item->file);
        // }
        if($request->hasFile('file')){
			Storage::disk('local')->delete('Items',$item->file);
            $name = Storage::disk('local')->put('Items', $request->file);
            $item->file = $name;
        }
		$item->save();
        return redirect()->route('sell')->withInfo('Post berhasil ditambahkan');
	}

}