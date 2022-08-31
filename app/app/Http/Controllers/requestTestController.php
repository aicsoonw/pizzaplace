<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class requestTestController extends Controller
{
    public function store(Request $request){
        echo var_export($request->all());
    }
}
