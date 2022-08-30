function renderCart(){
    document.getElementById('cart').innerHTML = '';

    cartObj = JSON.parse(localStorage.getItem('cart'));

    for (let i in cartObj) {
        if (cartObj[i]['count'] > 0) {
            document.getElementById('cart').innerHTML += `<p>Кол-во ${cartObj[i]['name']}'s: ${cartObj[i]['count']}</p>`;
        }
    }
}
