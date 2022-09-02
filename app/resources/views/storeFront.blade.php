@extends('layouts.store')

@section('title', 'Pizzaplace!')

@section('content')
    <div id="grid">
        @foreach($items as $Item)
            <ul class="wtf">
                <li>
                    <div class="card-body">
                        <img src="{{ $Item->pic }}" class="card-image" alt="" />
                        <div class="card-panel">
                            <h4>{{ $Item->name }}</h4><span>{{ $Item->price }}₽</span>
                            <span class="card__status"><button onclick="addToCart('{{ $Item->name }}')">Add to cart!</button></span>
                        </div>
                    </div>
                </li>
            </ul>
        @endforeach
    </div>
{{--    <div id="cartButtons">--}}
{{--        <button onclick="renderCart()">Render cart</button>--}}
{{--        <button onclick="clearCart()">Clear cart</button>--}}
{{--    </div>--}}
{{--    <div id="cart">--}}
{{--    </div>--}}
@endsection
