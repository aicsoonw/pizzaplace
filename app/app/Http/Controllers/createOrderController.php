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

//        dd($freshOrder0->idorders); // latest order id
        echo $freshOrder0->idorders . "<BR>\n";
//        dd($request->cart);

        $cartDESERT = json_decode(json_decode($request->cart)) ; // cart deserialized

//        var_export($cartDESERT); echo "<br>";

//        dd($cartDESERT);
        
//        $ItemHere = Item::all();

        foreach ($cartDESERT as $cartitem) {                                        //loop through cart
            if ($cartitem->count > 0) {                                             //если у объекта корзины колво больше 0

                echo $cartitem->name . ": " . $cartitem->count . "<BR>\n";
                foreach (Item::where('name', $cartitem->name)->get() as $items) {                                   //пытаемся найти id
                    var_export($items->iditems);
//                    if ($items->name == $cartitem->name) {
//                        $itemno = $items->iditems;
//                    }
                    $itemno = $items->iditems;
                }
                var_export($itemno);
                $cart = new CartDB;
                $cart->order_id = $freshOrder0->idorders;
                $cart->item_id = $itemno;
                $cart->qnt = $cartitem->count;
                $cart->refresh();                $cart->save();


            }
            echo 'end forech <BR> \n';
        }

//        foreach ($freshOrder0 as $freshorder) {
//            dd($freshorder->idorder);
//        }
//        echo var_export($request->all());

    }
}
