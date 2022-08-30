function req(val = undefined){
    const reqHandler = new XMLHttpRequest();

    reqHandler.onload = function(){
        document.getElementById('output').innerHTML = this.responseText;
    }

    reqHandler.open('GET', './qs/simplexmlhttpreq.php?q=' + val);

    reqHandler.send();
}
