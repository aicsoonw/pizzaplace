<?php

namespace App\Http\Controllers;

use App\Models\Item;

class getItemsFromDBController extends Controller
{
    public function getItems(){

        $dataFromDB = [];

        $items = Item::all();

        foreach ($items as $item) {
            array_push($dataFromDB, array(
                'dbid' => $item->iditem,
                'name' => $item->name,
                'price' => $item->price
            ));
        }

        echo json_encode($dataFromDB);
    }
}
