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

function checkCartForEmpty(){
    cartObj = JSON.parse(localStorage.getItem('cart'));

    length = cartObj.length;

    var counter=0;

    for (let i in cartObj) {
        if (cartObj[i]['count'] < 1) {
            counter++;
        }
    }

    if (counter === length){
        return true;
    }
}

function clearItem(itemnameIn){
    cartObj = JSON.parse(localStorage.getItem('cart'));

    for (let i in cartObj){
        if (cartObj[i]['name'] === itemnameIn) {
            cartObj[i]['count'] = 0;
        }
    }

    localStorage.setItem('cart', JSON.stringify(cartObj));

    renderCartOrderPage();
}

function addToCart(itemNameInput = 'pepperoni-pizza'){
    cartObj = JSON.parse(localStorage.getItem('cart'));

    for (let i in cartObj){
        if (cartObj[i]['name'] == itemNameInput) {
            cartObj[i]['count'] = cartObj[i]['count'] + 1;
        }
    }

    localStorage.setItem('cart', JSON.stringify(cartObj));
}
