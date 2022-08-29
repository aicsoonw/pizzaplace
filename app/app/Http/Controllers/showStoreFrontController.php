<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Item;

class showStoreFrontController extends Controller
{
    public function show(){
        //dd(Item::all());
        $items = Item::all();
        //dd($items);
        return view('storeFront', compact('items'));
    }
}
