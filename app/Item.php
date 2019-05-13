<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Item;

class Item extends Model
{
    //protected $table = "item";
    
    protected $fillable = ['nama_buku','harga','deskripsi','nomor_telepon','alamat','file'];

    public function user(){
        return $this->belongsTo('App\User');

    }
}
