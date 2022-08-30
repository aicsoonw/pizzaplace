<link href="/styles/customstyles.css" rel="stylesheet">
<script src="qs/getItemsAJAXLogic.js"></script>
<script src="qs/getCartFromLS.js"></script>
<script src="qs/loadInitialCartToLS.js"></script>
<script src="qs/addToCart.js"></script>
<script src="qs/clearCart.js"></script>
<script src="qs/renderCart.js"></script>

<body onload="if (!(localStorage.getItem('cart') != null)) {AJAXRequestOnLoad()}">
<div id="grid">
    @foreach($items as $Item)
        <ul class="cards" style="max-width: 100px;max-height: 100px">
            <li>
                <div class="card">
                    <img src="{{ $Item->pic }}" class="card__image" alt="" />
                    <div class="card__overlay">
                        <div class="card__header">
                            <div class="card__header-text">
                                <h3 class="card__title">{{ $Item->name }}</h3><span>{{ $Item->price }}₽</span>
                                <span class="card__status"><button onclick="addToCart('{{ $Item->name }}')">Add to cart!</button></span>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    @endforeach
</div>
<div id="cartButtons">
    <button onclick="renderCart()">Render cart</button>
    <button onclick="clearCart()">Clear cart</button>
</div>
<div id="cart">
</div>
</body>
