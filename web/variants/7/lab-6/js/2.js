function poisk() {
    var n = Number(document.getElementById('n').value);
    var k = Number(document.getElementById('k').value);

    var numbers = '';

    if (isNaN(n) || isNaN(k)) {
        numbers = 'ошибка';
    } else {
        for (var i = Math.pow(10, n - 1); i <= Math.pow(10, n) - 1; i++) {
            var sum = 0;
            var temp = i;

            for (; temp > 0; ) {
                sum += temp % 10;
                temp = Math.trunc(temp / 10);
            }

            if (sum === k) {
                numbers += ' ';
                numbers += String(i);
            }
        }
    }

    document.getElementById('numbers').innerHTML = numbers;
}