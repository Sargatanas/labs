function solution() {
    var number = document.getElementById('size').value;

    var sequence = '<table><tr>';
    var count = 1;
    var mult = '#';

    for (var i = 1; i <= number; i++) {
        var temp = Math.floor(Math.random() * 6);
        if (mult === '#') {
            mult = 1;
        }
        mult *= temp;

        sequence += '<td>' + String(temp) + '</td>';

        count++;
        if (count > 20) {
            sequence += '</tr><tr>';
            count = 1;
        }
    }

    sequence += '</tr></table>';
    if (mult === '#') {
        mult = '-последовательность отсутствует-';
    }

    document.getElementById('sequence').innerHTML = sequence;
    document.getElementById('count').innerHTML = String(mult);
}