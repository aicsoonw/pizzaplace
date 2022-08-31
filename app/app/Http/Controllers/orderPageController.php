<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class orderPageController extends Controller
{
    public function index(){
        return view('orderPage');
    }
}
