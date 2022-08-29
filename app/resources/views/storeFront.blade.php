<link href="/styles/customstyles.css" rel="stylesheet">
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
                                <span class="card__status"><button>Add to cart!</button></span>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
@endforeach
</div>
