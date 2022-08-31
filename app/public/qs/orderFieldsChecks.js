function checkName(){
    console.clear();
    // console.log('function called');
    // console.log(document.getElementById('nameInput').value);
    console.log((document.getElementById('nameInput').value).search(/[^\sёйцукенгшщзхъфывапролджэячсмитьбю]/i));
    if ((document.getElementById('nameInput').value).search(/[^\sёйцукенгшщзхъфывапролджэячсмитьбю]/gi) >= 0) {
        document.getElementById('nameError').innerHTML = `<p>Имя может содержать только буквы русского алфавита и пробел</p>`;
    } else {
        document.getElementById('nameError').innerHTML = "";
    }
}

function checkPhoneNum(){
    let result = document.getElementById('phoneInput').value.match(/[0-9]/g);
    if (result == null) {
        // document.getElementById('phoneInput').value = '';
        document.getElementById('phoneError').innerHTML = `
            <p>Номер телефона должен содержать только цифры</p>
        `;

        return;
    }
    if (result.length <= 10) {
        document.getElementById('phoneError').innerHTML = "";

        for (i = 0; i < result.length; i++){
            if (i == 0) {
                result[i]= '('+result[i];
            }

            if (i == 2) {
                result[i]= result[i]+')';
            }

            if (i == 3) {
                result[i]= '-'+result[i];
            }

            if (i == 6) {
                result[i]= '-'+result[i];
            }

            if (i == 8) {
                result[i]= '-'+result[i];
            }
        }
        document.getElementById('phoneInput').value = result.join('');
    } else {
        document.getElementById('phoneError').innerHTML = `
            <p>Номер телефона может содержать только цифры и должен быть не более 10 чисел</p>
        `;
    }
}

function checkAddress(){
    console.clear();
    // console.log('function called');
    // console.log(document.getElementById('nameInput').value);
    // console.log((document.getElementById('addressInput').value).search(/^[\sёйцукенгшщзхъфывапролджэячсмитьбю1234567890.,]+$/i));
    if ((document.getElementById('addressInput').value).search(/[^\sёйцукенгшщзхъфывапролджэячсмитьбю1234567890.,]+$/gi) >= 0) {
        document.getElementById('addressError').innerHTML = `<p>Адресс может содержать только буквы русского алфавита и цифры</p>`;
    } else {
        document.getElementById('addressError').innerHTML = "";
    }

}

function validateNameField(){
    var nameField = document.getElementById('nameInput');

    var nameRE = new RegExp(/[^\sёйцукенгшщзхъфывапролджэячсмитьбю]/gi);

    if (nameField.value == null || nameField.value == '') { // || (nameField.value.match(/[^\sёйцукенгшщзхъфывапролджэячсмитьбю]/gi).length > 0)
        // console.log('Name field empty');
        return true;
    } else if (nameField.value.match(nameRE) == null) {
        return false;
    } else if (nameField.value.match(nameRE).length > 0) {
        // console.log('Name field has faulty characters')
        return true;
    }
}
 function validatePhoneField(){
    var phoneField = document.getElementById('phoneInput');

    if (phoneField.value.match(/[0-9]/g) == null) {
        // console.log('phone field empty');
        return true;
    } else if (phoneField.value.match(/[0-9]/g).length < 10) {
        // console.log('phone less than 10');
        return true;
    } else if (phoneField.value.match(/[0-9]/g).length > 10) {
        // console.log('phone more than 10');
        return true;
    }
    // console.log('phone ok');
    return false;
 }

 function validateAddressField(){
     var addrField = document.getElementById('nameInput');

     var addrRE = new RegExp(/[^\sёйцукенгшщзхъфывапролджэячсмитьбю1234567890.,]+$/gi);

     if (addrField.value == null || addrField.value == '') { // || (nameField.value.match(/[^\sёйцукенгшщзхъфывапролджэячсмитьбю]/gi).length > 0)
         // console.log('ADDR field empty');
         return true;
     } else if (addrField.value.match(addrRE) == null) {
         return false;
     } else if (addrField.value.match(addrRE).length > 0) {
         // console.log('ADDR field has faulty characters')
         return true;
     }
 }
