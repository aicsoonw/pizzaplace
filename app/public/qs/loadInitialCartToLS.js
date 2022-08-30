function loadInitCartToLS(cartString = "[{\"dbid\":\"1\",\"name\":\"pepperoni-pizza\",\"price\":\"449.99\"},{\"dbid\":\"2\",\"name\":\"cheeze-pizza\",\"price\":\"249.99\"},{\"dbid\":\"3\",\"name\":\"mushroom-pizza\",\"price\":\"299.99\"},{\"dbid\":\"4\",\"name\":\"pineaplle-pizza\",\"price\":\"299.99\"},{\"dbid\":\"5\",\"name\":\"coke\",\"price\":\"49.99\"},{\"dbid\":\"6\",\"name\":\"sprite\",\"price\":\"49.99\"}]"){
    const cartObj = JSON.parse(cartString);

    for (let i in cartObj) {
        cartObj[i]['count'] = 0;
    }

    localStorage.setItem('cart', JSON.stringify(cartObj));
}
