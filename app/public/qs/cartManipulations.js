function cartItemIncr(itemInput){
    cartObj = JSON.parse(localStorage.getItem('cart'));

    for (let i in cartObj) {
        if (cartObj[i]['name'] == itemInput) {
            cartObj[i]['count'] = cartObj[i]['count'] + 1;
        }
    }

    localStorage.setItem('cart', JSON.stringify(cartObj));

    renderCartOrderPage();
}

function cartItemDecr(itemInput){
    cartObj = JSON.parse(localStorage.getItem('cart'));

    for (let i in cartObj) {
        if (cartObj[i]['name'] == itemInput) {
            cartObj[i]['count'] = cartObj[i]['count'] - 1;
        }
    }

    localStorage.setItem('cart', JSON.stringify(cartObj));

    renderCartOrderPage();
}
