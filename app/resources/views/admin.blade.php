@extends('layouts.store')

@section('title', 'Pizzaplace! ADMIN')

@section('content')
    <h1>ADMINKA</h1>
    <div class="test-box">
        @foreach($data as $items)
            <p>Order №{{$items->idorders}} | <a href="/admin/{{$items->idorders}}">EDIT</a> | DELETE</p>
{{--            {{$items->idorders}}:--}}
            {{$items->name}}: +7{{ $items->phone }}{{'@'}}{{ $items->where }}<br>
            <div class="test-order-items">
                @php
                    $order_item = App\Models\CartDB::where('order_id', $items->idorders)->select('item_id', 'qnt')->get();

                    foreach ($order_item as $item) {
                        $itemz = App\Models\Item::where('iditems', $item->item_id)->select('name')->get()->first();
                        echo "<p>" . $itemz->name . ": " . $item->qnt . "<p>";
                    }

                @endphp
            </div>

        @endforeach

{{--        <p>Order №2 | EDIT | DELETE</p>--}}
{{--        <div class="test-order-items">--}}
{{--            <p>Item?</p>--}}
{{--            <p>Item?</p>--}}
{{--            <p>Item?</p>--}}
{{--            <p>TOTAL?</p>--}}
{{--        </div>--}}


{{--        <p>Order №3 | EDIT | DELETE</p>--}}
{{--        <div class="test-order-items">--}}
{{--            <p>Item?</p>--}}
{{--            <p>Item?</p>--}}
{{--            <p>Item?</p>--}}
{{--            <p>TOTAL?</p>--}}
{{--        </div>--}}

    </div>
@endsection
