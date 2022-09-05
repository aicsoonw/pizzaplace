<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\CartDB;

class createOrderController extends Controller
{
    public function init(Request $request){
        $order = new Order;

        $order->name = $request->name;
        $order->where = $request->where;
        $order->phone = $request->phone;

        $order->save();
        $freshOrder0 = $order->fresh();
        echo $freshOrder0->idorders . "\r\n";

        $cartDESERT = json_decode(json_decode($request->cart)) ; // cart deserialized

        foreach ($cartDESERT as $cartitem) {                                        // loop through cart
            if ($cartitem->count > 0) {                                             // если у объекта корзины колво больше 0

                echo $cartitem->name . ": " . $cartitem->count . "\r\n";
                $itemno = 0;
                foreach (Item::where('name', $cartitem->name)->get() as $items) {   // пытаемся найти id
                    $itemno = $items->iditems;
                }
                $cart = new CartDB;
                $cart->order_id = $freshOrder0->idorders;
                $cart->item_id = $itemno;
                $cart->qnt = $cartitem->count;
                $cart->save();
            }
        }
    }
}
