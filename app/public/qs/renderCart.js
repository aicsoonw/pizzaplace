function renderCart(){
    document.getElementById('cart').innerHTML = '';

    cartObj = JSON.parse(localStorage.getItem('cart'));

    for (let i in cartObj) {
        if (cartObj[i]['count'] > 0) {
            document.getElementById('cart').innerHTML += `<p>Кол-во ${cartObj[i]['name']}'s: ${cartObj[i]['count']}</p>`;
        }
    }
}

function renderCartOrderPage(){
    document.getElementById('cartDisplayOrderPage').innerHTML = '';

    cartObj = JSON.parse(localStorage.getItem('cart'));

    for (let i in cartObj) {
        if (cartObj[i]['count'] > 0) {
            document.getElementById('cartDisplayOrderPage').innerHTML += `
                <div id="singleItem">
                    <p>
                        ${cartObj[i]['name']}
                        <button onclick="cartItemIncr('${cartObj[i]['name']}')">+</button>
                        <button onclick="cartItemDecr('${cartObj[i]['name']}')">-</button>
                        ${ (((Number(cartObj[i]['price']) * 100) * Number(cartObj[i]['count'])) / 100).toFixed(2) } ₽
                    </p>
                </div>
            `;
        }
    }
}
