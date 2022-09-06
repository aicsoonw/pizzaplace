<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\CartDB;
use App\Models\Item;
use Illuminate\Support\ItemNotFoundException;
use Illuminate\Support\Facades\DB;


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
//            echo $key . ": " . $value . '<br>';
        }

//        echo '---<br>';

        $order_item = CartDB::where('order_id', $id)->select('item_id', 'qnt')->get();


        foreach ($order_item as $item) {
            $itemz = Item::where('iditems', $item->item_id)->select('name')->get()->first();
//            echo $itemz->name . ": " . $item->qnt . "<BR>";
        }
        return view('adminSOrder', ['orderInfo'=>$s_order, 'orderItems'=>$order_item, 'itemList'=>Item::all()]);
    }

    public function testFun($our){
        $testID = $our;

        $list = CartDB::where('order_id', $testID)->get()->all();

        $i = 0;
        $ebatARRAY=[];
        foreach ($list as $item){
            $itemsLIST = Item::where('iditems', $item->item_id)->get()->first();
            $ebatARRAY[$i][0] = $itemsLIST->name;
            $ebatARRAY[$i][1] = $item->qnt;
            $i++;
        }

//        dd($ebatARRAY);
//        dd($list);

//        var_dump(($list->all()));

//        foreach ($list->all() as $item) {
//            echo "<br>" . $item->id;
//        }

//        dd(($list->all())[0]->id);

        return view('displayOrderItems', ['data'=>$ebatARRAY]);
    }

    function sortBySUM(Request $request){
        if($request->input('sort') != 'ordertotal'){
            return;
        }
        if ($request->input('avd') == 'desc'){
            $orderTotals = CartDB::select(DB::raw('carts.order_id, SUM(price * qnt) as total_price'))
                ->join('items','items.iditems','=','carts.item_id')
                ->groupBy('order_id')
                ->orderBy('total_price', 'desc')
                ->get();
//                dd($orderTotals);
            foreach ($orderTotals as $orderTotal) {
                echo $orderTotal->order_id . ": ";
                echo $orderTotal->total_price . "<BR>";

                $items = CartDB::select(DB::raw('*'))
                    ->join('items', 'items.iditems','=','carts.item_id')
                    ->orderBy('order_id')
                    ->get();
                foreach ($items as $item){
                    if ($item->order_id != $orderTotal->order_id) {
                        continue;
                    }
                    echo "&emsp;" . $item->name . " x ";
                    echo $item->qnt . ": ";
                    echo $item->price * $item->qnt . "RUB<br>";
                }
            }
        } else if($request->input('avd') == 'asc'){
            $orderTotals = CartDB::select(DB::raw('carts.order_id, SUM(price * qnt) as total_price'))
                ->join('items','items.iditems','=','carts.item_id')
                ->groupBy('order_id')
                ->orderBy('total_price', 'asc')
                ->get();
//                dd($orderTotals);
            foreach ($orderTotals as $orderTotal) {
                echo $orderTotal->order_id . ": ";
                echo $orderTotal->total_price . "<BR>";

                $items = CartDB::select(DB::raw('*'))
                    ->join('items', 'items.iditems','=','carts.item_id')
                    ->orderBy('order_id')
                    ->get();
                foreach ($items as $item){
                    if ($item->order_id != $orderTotal->order_id) {
                        continue;
                    }
                    echo "&emsp;" . $item->name . " x ";
                    echo $item->qnt . ": ";
                    echo $item->price * $item->qnt . "RUB<br>";
                }
            }
        }
    }

    public function sortByCNT(Request $request){
        if ($request->input('avd') == 'desc' || $request->input('avd') == 'asc') {
            $avdVal = $request->input('avd');

        } else {
            return "faulty :c";
        }

        $orderSUMs = CartDB::select(DB::raw('carts.order_id, SUM(carts.qnt) as total_qnt,  orders.name, orders.phone, orders.where'))
                                ->join('orders','carts.order_id','=','orders.idorders')
                                ->groupBy('order_id')
                                ->orderBy('total_qnt', $avdVal)
                                ->get();
        foreach ($orderSUMs as $orderSUM) {
            echo $orderSUM->order_id . ": " . $orderSUM->total_qnt . "<BR>";
            $items = CartDB::select(DB::raw('*'))
                ->join('items', 'items.iditems','=','carts.item_id')
                ->orderBy('order_id')
                ->get();
            foreach ($items as $item){
                if ($item->order_id != $orderSUM->order_id) {
                    continue;
                }
                echo "&emsp;" . $item->name . " x ";
                echo $item->qnt . ": ";
                echo $item->price * $item->qnt . "RUB<br>";
            }
        }
    }
}
