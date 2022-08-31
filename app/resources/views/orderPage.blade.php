<head>
    <title>
        Оформление заказа
    </title>
    <script src="qs/getItemsAJAXLogic.js"></script>
    <script src="qs/getCartFromLS.js"></script>
    <script src="qs/loadInitialCartToLS.js"></script>
    <script src="qs/addToCart.js"></script>
    <script src="qs/clearCart.js"></script>
    <script src="qs/renderCart.js"></script>
    <script src="qs/cartManipulations.js"></script>
    <script src="qs/renderCart.js"></script>
    <link href="styles/orderPageTemplateStyle.css" rel="stylesheet">
    <script src="qs/orderFieldsChecks.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $.post("/test",
                    {
                        cart: JSON.stringify(localStorage.getItem('cart')),
                        name: document.getElementById('nameInput').value,
                        phone: document.getElementById('phoneInput').value.match(/[0-9]/g).join('')
                    },
                    function(data,status){
                        alert("Data: " + data + "\nStatus: " + status);
                    });
            });
        });
    </script>
    -->
</head>
<body onload="renderCartOrderPage()">
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
            <input id="nameInput" type="text" placeholder="Ivan Ivanov" onkeyup="checkName()">

            <!-- potential error -->
            <span class="errors" id="nameError">

            </span>
        </p>

        <p>
            Номер телефона:
            +7 <input onkeyup="checkPhoneNum()" id="phoneInput" type="tel" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="(XXX)-XX-XX">

            <!-- potential error -->
            <span class="errors" id="phoneError">

            </span>
        </p>

        <p>
            Адресс:
            <input id="addressInput" onkeyup="checkAddress()" type="text">

            <!-- potential error -->
            <span class="errors" id="addressError">

            </span>
        </p>

        <p>
            Комментарии к заказу:
            <input type="text">
        </p>
    </div>

    <br>
    <button>Оформить заказ</button>

    <div id="fields">
    </div>
</body>
