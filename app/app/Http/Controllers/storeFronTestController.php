<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class storeFronTestController extends Controller
{
    public function show(){
        $items = Item::all();
        return view('storefronttest', compact('items'));
    }
}
