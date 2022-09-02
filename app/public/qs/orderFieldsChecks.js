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
