function loadInitCartToLS(cartString){
    const cartObj = JSON.parse(cartString);

    for (let i in cartObj) {
        cartObj[i]['count'] = 0;
    }

    localStorage.setItem('cart', JSON.stringify(cartObj));
}
