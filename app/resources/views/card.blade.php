<link href="/styles/customstylesTEST.css" rel="stylesheet">
<div id="grid">
<ul class="cards" >
    <li>
        <div class="card">
            <img src="{{ $pizzaIMG }}" class="card__image" alt="" />
            <div class="card__overlay">
                <div class="card__header">
                    <div class="card__header-text">
                        <h3 class="card__title">{{ $pizzaName }}</h3><span>349.99₽</span>
                        <button>Add to cart!</button>
                    </div>
                </div>
            </div>
        </div>
    </li>
</ul>
<ul class="cards" >
    <li>
        <div class="card">
            <img src="{{ $pizzaIMG }}" class="card__image" alt="" />
            <div class="card__overlay">
                <div class="card__header">
                    <div class="card__header-text">
                        <h3 class="card__title">{{ $pizzaName }}</h3><span>349.99₽</span>
                        <button>Add to cart!</button>
                    </div>
                </div>
            </div>
        </div>
    </li>
</ul>
    <ul class="cards" >
        <li>
            <div class="card">
                <img src="{{ $pizzaIMG }}" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <div class="card__header-text">
                            <h3 class="card__title">{{ $pizzaName }}</h3><span>349.99₽</span>
                            <button>Add to cart!</button>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
