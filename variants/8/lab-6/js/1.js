function solution() {
    var number = document.getElementById('data').value;

    var sequence_1 = '<table><tr>';
    var sequence_2 = '<table><tr>';
    var count_1 = 1;
    var count_2 = 1;
    var count = 0;

    for (var i = 1; i <= number; i++) {
        var temp_1 = Math.floor(Math.random() * 6);
        var temp_2 = Math.floor(Math.random() * 6);
        if (temp_1 === temp_2) {
            sequence_1 += '<td class="coincidence">' + String(temp_1) + '</td>';
            sequence_2 += '<td class="coincidence">' + String(temp_2) + '</td>';
            count++;
        } else {
            sequence_1 += '<td>' + String(temp_1) + '</td>';
            sequence_2 += '<td>' + String(temp_2) + '</td>';
        }

        count_1++;
        if (count_1 > 20) {
            sequence_1 += '</tr><tr>';
            count_1 = 1;
        }
        count_2++;
        if (count_2 > 20) {
            sequence_2 += '</tr><tr>';
            count_2 = 1;
        }
    }

    sequence_1 += '</tr></table>';
    sequence_2 += '</tr></table>';

    document.getElementById('sequence_1').innerHTML = sequence_1;
    document.getElementById('sequence_2').innerHTML = sequence_2;
    document.getElementById('count').innerHTML = String(count);
}