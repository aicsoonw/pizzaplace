// function checkName(){
//     // console.clear();
//     // // console.log('function called');
//     // // console.log(document.getElementById('nameInput').value);
//     // console.log((document.getElementById('nameInput').value).search(/[^\sёйцукенгшщзхъфывапролджэячсмитьбю]/i));
//     // if ((document.getElementById('nameInput').value).search(/[^\sёйцукенгшщзхъфывапролджэячсмитьбю]/gi) >= 0) {
//     //     document.getElementById('nameError').innerHTML = `<p>Имя может содержать только буквы русского алфавита и пробел</p>`;
//     // } else {
//     //     document.getElementById('nameError').innerHTML = "";
//     // }
//
//     // validateNameField()
// }

function checkPhoneNum(){
    let result = document.getElementById('phoneInput').value.match(/[0-9]/g);
    if (result == null) {
        // document.getElementById('phoneInput').value = '';
        document.getElementById('phoneError').innerHTML = `
            <p>Пожалуйста заполните ваш номер телефона.</p>
        `;
        document.getElementById('phoneInput').value = ('');


        return true;
    }
    if (result.length <= 10) {
        document.getElementById('phoneError').innerHTML = "";

        for (i = 0; i < result.length; i++){
            if (i === 0) {
                result[i]= '('+result[i];
            }

            if (i === 3) {
                result[i]= ')-'+result[i];
            }

            if (i === 6) {
                result[i]= '-'+result[i];
            }

            if (i === 8) {
                result[i]= '-'+result[i];
            }
        }
        document.getElementById('phoneInput').value = result.join('');
        if (result.length < 10) {
            document.getElementById('phoneError').innerHTML = `
            <p>Номер телефона должен быть не менее 10 чисел</p>
        `;
            return true;

        } else if (result.length === 10) {
            // document.getElementById('phoneError').innerHTML = "<p style='color:#65ff71'>OK</p>";
            return false;
        }

    } else {
        document.getElementById('phoneError').innerHTML = `
            <p>Номер телефона может содержать не более 10 чисел</p>
        `;
        return true;
    }
}

// function checkAddress(){
//     // console.clear();
//     // // console.log('function called');
//     // // console.log(document.getElementById('nameInput').value);
//     // // console.log((document.getElementById('addressInput').value).search(/^[\sёйцукенгшщзхъфывапролджэячсмитьбю1234567890.,]+$/i));
//     // if ((document.getElementById('addressInput').value).search(/[^\sёйцукенгшщзхъфывапролджэячсмитьбю1234567890.,]+$/gi) >= 0) {
//     //     document.getElementById('addressError').innerHTML = `<p>Адресс может содержать только буквы русского алфавита и цифры</p>`;
//     // } else {
//     //     document.getElementById('addressError').innerHTML = "";
//     // }
//
//     // validateAddressField();
//
// }

// function validateNameFieldEXP(){
//     var nameField = document.getElementById('nameInput');
//
//     var nameRE = new RegExp(/[^\sёйцукенгшщзхъфывапролджэячсмитьбю]/gi);
//
//     if (nameField.value == null || nameField.value == '') { // || (nameField.value.match(/[^\sёйцукенгшщзхъфывапролджэячсмитьбю]/gi).length > 0)
//         // console.log('Name field empty');
//         return true;
//     } else if (nameField.value.match(nameRE) == null) {
//         return false;
//     } else if (nameField.value.match(nameRE).length > 0) {
//         // console.log('Name field has faulty characters')
//         return true;
//     }
// }

// function validatePhoneField(){
//     var phoneField = document.getElementById('phoneInput');
//
//     if (phoneField.value.match(/[0-9]/g) == null) {
//         // console.log('phone field empty');
//         return true;
//     } else if (phoneField.value.match(/[0-9]/g).length < 10) {
//         // console.log('phone less than 10');
//         return true;
//     } else if (phoneField.value.match(/[0-9]/g).length > 10) {
//         // console.log('phone more than 10');
//         return true;
//     }
//     // console.log('phone ok');
//     return false;
//  }

function validateAddressField(){
    var addrField = document.getElementById('addressInput');

//      /^[\sа-яё.,0-9]{1,150}$/i.test
    var addrRE = new RegExp('');

    if (addrField.value == null || addrField.value === '') { // || (nameField.value.match(/[^\sёйцукенгшщзхъфывапролджэячсмитьбю]/gi).length > 0)
        // пусто
        console.log('ADDR field empty');
        document.getElementById('addressError').innerHTML = `<p>Адресс должен быть заполнен</p>`;
        return true;
    } else if (addrField.value.match(addrRE) == null) {
        // document.getElementById('addressError').innerHTML = '';
        //
        // return false;
    } else if (addrField.value.match(addrRE).length > 0) {
        // содержит что-то кроме кириллицы, цифр, точки или запятой
        // console.log('ADDR field has faulty characters')
        document.getElementById('addressError').innerHTML = `<p>Адресс должен содержать только символы русского алфавита, цифры, точку и запятую</p>`;
        return true;
    }
    document.getElementById('addressError').innerHTML = '';
}

function validateNameField(){ // returns TRUE if something wronmg returns FALSE if everything OK
    const nameFieldElem = document.getElementById('nameInput');

    if (/^[\sа-яё]{0}$/i.test(nameFieldElem.value)) {
        // console.log('Name Field with value of: ' + nameFieldElem.value + ', is FAULTY. Empty');
        document.getElementById('nameError').innerHTML = `<p>Пожалуйста заполните имя.</p>`;
        return true;
    }

    if (/^[\sа-яё]{1,50}$/i.test(nameFieldElem.value)) {
        document.getElementById('nameError').innerHTML = '';
        return false;
    } else {
        // console.log('Name Field with value of: ' + nameFieldElem.value + ', is FAULTY. Faulty characters');
        document.getElementById('nameError').innerHTML = `<p>Имя должно содержать только буквы русского алфавита.</p>`;
        return true;
    }
}

function validateAddrField(){
    const addrFieldElem = document.getElementById('addressInput');

    if (/^[\sа-яё.,0-9]{1,150}$/i.test(addrFieldElem.value)) {
        // console.log('Addr field is OK');
        document.getElementById('addressError').innerHTML = ``;
        return false;
    }

    if (/^[]{0}$/i.test(addrFieldElem.value)) {
        // console.log('Addr field is EMPTY');
        document.getElementById('addressError').innerHTML = `<p>Пожалуйста заполните адресс</p>`;

        return true;
    }

    if (!/^[\sа-яё.,0-9]{1,150}$/i.test(addrFieldElem.value)) {
        // console.log('Addr field FAULTY');
        if (addrFieldElem.value.length > 150) {
            // console.log('Addr field is TOO BIG');
            document.getElementById('addressError').innerHTML = `<p>Адресс не должен превышать 150 символов</p>`;
            return true;
        }
        // console.log('Addr field has INVALID CHARS')
        document.getElementById('addressError').innerHTML = `<p>Адрес доллжен содержать только буквы русского алфавита, цифры, точку и запятую</p>`;

        return true;
    }

}
