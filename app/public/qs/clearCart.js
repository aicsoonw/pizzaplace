function clearCart(){
    cartObj = JSON.parse(localStorage.getItem('cart'));

    for (let i in cartObj){
        cartObj[i]['count'] = 0;
    }

    localStorage.setItem('cart', JSON.stringify(cartObj));

    renderCart();
}
