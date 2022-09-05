function cartItemIncr(itemInput){
    const cartObj = JSON.parse(localStorage.getItem('cart'));

    for (let i in cartObj) {
        if (cartObj[i]['name'] === itemInput) {
            cartObj[i]['count'] = cartObj[i]['count'] + 1;
        }
    }

    localStorage.setItem('cart', JSON.stringify(cartObj));

    renderCartOrderPage();
}

function cartItemDecr(itemInput){
    const cartObj = JSON.parse(localStorage.getItem('cart'));

    for (let i in cartObj) {
        if (cartObj[i]['name'] === itemInput) {
            cartObj[i]['count'] = cartObj[i]['count'] - 1;
        }
    }

    localStorage.setItem('cart', JSON.stringify(cartObj));

    renderCartOrderPage();
}

function checkCartForEmpty(){
    const cartObj = JSON.parse(localStorage.getItem('cart'));

    length = cartObj.length;

    let counter = 0;

    for (let i in cartObj) {
        if (cartObj[i]['count'] < 1) {
            counter++;
        }
    }

    if (counter === length){
        return true;
    }

    return false;
}

function clearItem(itemnameIn){
    const cartObj = JSON.parse(localStorage.getItem('cart'));

    for (let i in cartObj){
        if (cartObj[i]['name'] === itemnameIn) {
            cartObj[i]['count'] = 0;
        }
    }

    localStorage.setItem('cart', JSON.stringify(cartObj));

    renderCartOrderPage();
}

function addToCart(itemNameInput = 'pepperoni-pizza'){
    const cartObj = JSON.parse(localStorage.getItem('cart'));

    for (let i in cartObj){
        if (cartObj[i]['name'] === itemNameInput) {
            cartObj[i]['count'] = cartObj[i]['count'] + 1;
        }
    }

    localStorage.setItem('cart', JSON.stringify(cartObj));
}

function viewTotal(){
    const cartObj = JSON.parse(localStorage.getItem('cart'));

    let sum = 0;

    for (let i in cartObj) {
        sum += ((cartObj[i]['price'] * 100) * cartObj[i]['count']) / 100;
    }

    return sum;
}
