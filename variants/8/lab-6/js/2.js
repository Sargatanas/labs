function solution() {
    var a = document.getElementById('a').value;
    var b = document.getElementById('b').value;
    var c = document.getElementById('c').value;

    var error = false;
    switch(b) {
        case '2':
            if (c % 4 === 0) {
                if (a > 29) {
                    error = true;
                }
            } else {
                if (a > 28) {
                    error = true;
                }
            }
            break;
        case '4':
            if (a > 30) {
                error = true;
            }
            break;
        case '6':
            if (a > 30) {
                error = true;
            }
            break;
        case '9':
            if (a > 30) {
                error = true;
            }
            break;
        case '11':
            if (a > 30) {
                error = true;
            }
            break;
    }

    if (error) {
        document.getElementById('date').innerHTML = 'ошибка в формировании даты';
        document.getElementById('count').innerHTML = 'прошло #';
    } else {
        var last_date = new Date(c, 0, 1, 0, 0, 0, 0);
        var date = new Date(c, b - 1, a, 0, 0, 0, 0);


        document.getElementById('date').innerHTML = formDate(a, b, c);

        var count = Math.ceil((date - last_date) / 1000 / 60 / 60 / 24);
        var text = '';
        if ((count % 10 === 1) && (count !== 11)) {
            text = 'прошел ' + toStringCountDays(count);
        } else {
            text = 'прошло ' + toStringCountDays(count);
        }
        document.getElementById('count').innerHTML = text;
    }
}