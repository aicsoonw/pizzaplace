@extends('layouts.store')

@section('title', 'Pizzaplace! ADMIN SOrder')

@section('content')
    <p>{{ $orderInfo->name }}:+7{{ $orderInfo->phone }}{{'@'}}{{ $orderInfo->where }}</p>
    @foreach($orderItems as $items)
        <p>
            @foreach($itemList as $list)
                @if($list->iditems === $items->item_id)
                    {{$list->name}}
                @endif
            @endforeach
            : {{$items->qnt}}</p>
    @endforeach

@endsection
