function AJAXRequestOnLoad(){

    const xhr = new XMLHttpRequest();

    xhr.onload = function () {
        loadInitCartToLS(this.responseText);
    }

    xhr.open('GET', '/getItemsFromDB');
    xhr.send();
}
