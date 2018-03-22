function onchangePhone(id) {
    var phone = document.getElementById(id).value;
    var length = document.getElementById(id).getAttribute('data-length');

    if (phone.length > length) {
        switch(phone.length) {
            case 3: document.getElementById(id).value += '-';
                break;
            case 7: document.getElementById(id).value += '-';
                break;
            case 10: document.getElementById(id).value += '-';
                break;
        }
    }
    document.getElementById(id).setAttribute('data-length', phone.length);
}