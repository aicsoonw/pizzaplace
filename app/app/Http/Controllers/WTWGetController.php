<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WTWGetController extends Controller
{
    public function test(){

        echo request()->q;

    }
}
