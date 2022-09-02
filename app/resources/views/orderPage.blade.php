@extends('layouts.store')

@section('title', 'Pizzaplace!')

@section('content')
    <h2>Оформление заказа</h2>
    <h3>Ваша корзина</h3>

    <!-- your cart -->
    <div class="orderBlocks" id="cartDisplayOrderPage">
    </div>

    <h3>Ваши данные</h3>

    <!-- fields -->
    <div class="orderBlocks">
        <p>
            Имя:
            <input id="nameInput" type="text" placeholder="Ivan Ivanov" onkeyup="validateNameField()">

            <!-- potential error -->
            <span class="errors" id="nameError">

            </span>
        </p>

        <p>
            Номер телефона:
            +7 <input onkeyup="checkPhoneNum()" id="phoneInput" type="tel" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="(XXX)-XXX-XX-XX">

            <!-- potential error -->
            <span class="errors" id="phoneError">

            </span>
        </p>

        <p>
            Адресс:
            <input id="addressInput" onkeyup="validateAddrField()" type="text">

            <!-- potential error -->
            <span class="errors" id="addressError">

            </span>
        </p>

        <p>
            Комментарии к заказу:
            <input type="text">
        </p>

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

    </div>

    <br>
    <button onclick="postORDER()">Оформить заказ</button>

    <div id="fields">
    </div>
@endsection
