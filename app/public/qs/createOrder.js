$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function postORDER(){
    if (checkCartForEmpty()) {
        alert('Ваша корзина пуста');
        return;
    }

    if (validateAddrField() || validateNameField() || checkPhoneNum()) {
        validateNameField();checkPhoneNum();

        alert('Пожалуйста заполните ваши данные и исправьте ошибки');
        return;
    }
    $.post("/postOrder",
        {
            cart: JSON.stringify(localStorage.getItem('cart')),
            name: document.getElementById('nameInput').value,
            phone: document.getElementById('phoneInput').value.match(/[0-9]/g).join(''),
            where: document.getElementById('addressInput').value
        },
        function(data,status){
            alert("Data: " + data + "\nStatus: " + status);
        });
}
