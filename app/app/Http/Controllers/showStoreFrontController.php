<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

//out show main page (store Front) Controller
//gets list of items from DB using Eloquent ORM model laravel concept
class showStoreFrontController extends Controller
{
    public function show(){
        $items = Item::all();                                       //Eloquent ORM Model
        return view('storeFront', compact('items'));  //return view (storeFront.blade.php)
    }
}
