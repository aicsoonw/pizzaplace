<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showPizzaCardController extends Controller
{

    public function show($id) {

        $conn = mysqli_connect('localhost','root','sj6-fs&-xxfw', 'laravel');

        if (!$conn) {
            die('Could not connect: ' . mysqli_error($conn));
        }

        $sql = "SELECT * FROM laravel.items where iditems=$id;";

        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_array($result);

        $pizzaName = $row['name'];

        $pizzaIMG = $row['pic'];
        //dd($pizzaName);

        return view('card', [
            'pizzaName' => $pizzaName,
            'pizzaIMG' => $pizzaIMG
        ]);

    }

}
