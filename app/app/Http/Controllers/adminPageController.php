<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\CartDB;
use App\Models\Item;
use Illuminate\Support\ItemNotFoundException;

class adminPageController extends Controller
{
    public function view(){
        try {
            $s_order = Order::all(); //->select('idorders', 'name', 'where', 'phone')->get()->findOrFail();//where('idorders', $id)->select('idorders', 'name', 'where', 'phone')->get()
        } catch (ItemNotFoundException $ex) {
            dd('NOTHING TO SEE HERE');
        }
        //dd($s_order);
        return view('admin', ['data'=>$s_order, 'data2'=>CartDB::all(), 'data3'=>Item::all()]);
    }

    public function show($id){

        try {
            $s_order = Order::where('idorders', $id)->select('idorders', 'name', 'where', 'phone')->get()->firstOrFail();//where('idorders', $id)->select('idorders', 'name', 'where', 'phone')->get()
        } catch (ItemNotFoundException $ex) {
            dd('NOTHING TO SEE HERE');
        }

        foreach ($s_order->getAttributes() as $key => $value) {
            echo $key . ": " . $value . '<br>';
        }

        echo '---<br>';

        $order_item = CartDB::where('order_id', $id)->select('item_id', 'qnt')->get();


        foreach ($order_item as $item) {
            $itemz = Item::where('iditems', $item->item_id)->select('name')->get()->first();
            echo $itemz->name . ": " . $item->qnt . "<BR>";
        }
    }
}
