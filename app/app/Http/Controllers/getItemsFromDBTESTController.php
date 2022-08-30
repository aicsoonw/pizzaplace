<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getItemsFromDBTESTController extends Controller
{
    public function test(){

        $conn = mysqli_connect('localhost', 'root', 'sj6-fs&-xxfw', 'laravel');

        //Вывод ошибки в случае провала подключения к БД
        if (!$conn) {
            die('Could not connect: ' . mysqli_error($conn));
        }

        $sqlq = "SELECT * FROM laravel.items";

        $result = mysqli_query($conn, $sqlq);

        $dataFromDB = [];

        while ($row = mysqli_fetch_assoc($result)) {
            array_push($dataFromDB, array(
                'dbid' => $row['iditems'],
                'name' => $row['name'],
                'price' => $row['price']
            ));
        }

        echo 'Will this echo?';

        dd($dataFromDB);


    }
}
