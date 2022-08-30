function addToCart(itemNameInput = 'pepperoni-pizza'){
    cartObj = JSON.parse(localStorage.getItem('cart'));

    for (let i in cartObj){
        if (cartObj[i]['name'] == itemNameInput) {
            cartObj[i]['count'] = cartObj[i]['count'] + 1;
        }
    }

    localStorage.setItem('cart', JSON.stringify(cartObj));
}

