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

}