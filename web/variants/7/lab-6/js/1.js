function summa() {
    var number = document.getElementById('size').value;

    var sequence = '<table><tr>';
    var count = 1;
    var sum = '#';

    for (var i = 1; i <= number; i++) {
        var temp = 5 - Math.floor(Math.random() * 11);
        if (sum === '#') {
            sum = 0;
        }
        sum += Math.abs(temp);

        sequence += '<td>' + String(temp) + '</td>';

        count++;
        if (count > 15) {
            sequence += '</tr><tr>';
            count = 1;
        }
    }

    sequence += '</tr></table>';
    if (sum === '#') {
        sum = '-последовательность отсутствует-';
    }

    document.getElementById('sequence').innerHTML = sequence;
    document.getElementById('count').innerHTML = String(sum);
}