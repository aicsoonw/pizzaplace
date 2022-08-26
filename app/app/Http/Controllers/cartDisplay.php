<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\User;
 
class cartDisplay extends Controller
{
    public function __invoke(){
        return view('orderinfo');
    }
}