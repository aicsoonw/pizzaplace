<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/styles/customstylesTEST.css" rel="stylesheet">
    <script src="qs/getItemsAJAXLogic.js"></script>
    <script src="qs/loadInitialCartToLS.js"></script>
    <script src="qs/clearCart.js"></script>
    <script src="qs/renderCart.js"></script>
    <link href="/styles/topbar.css" rel="stylesheet">
    <link href="styles/orderPageTemplateStyle.css" rel="stylesheet">
    <script src="qs/orderFieldsChecks.js"></script>
    <script src="qs/cartManipulations.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/qs/createOrder.js"></script>
</head>
<body onload="if (!(localStorage.getItem('cart') != null)) {AJAXRequestOnLoad()} if (window.location.href.slice(-6) === '/order') {renderCartOrderPage()}">
    <div class="topbar">
        <span class="topbar-text">Pizzaplace</span>
    </div>
    <div>
        @yield('content')
    </div>
</body>
</html>
