function formDate(a, b, c) {
    var dd = '';
    if(a < 10) {
        dd += '0' + String(a);
    } else {
        dd += String(a);
    }
    var mm = '';
    if(b < 10) {
        mm += '0' + String(b);
    } else {
        mm += String(b);
    }
    var yyyy = '';
    for (var i = String(c).length; i < 4; i++) {
        yyyy += '0'
    }
    yyyy += String(c);
    return String(dd) + '.' + String(mm) + '.' + String(yyyy);
}