function solution() {
    var n = document.getElementById("length").value;
    var sequence = "<table>";
    var count = 0;
    var max, pre_max, temp;
    for (var i = 0; i < n; i++) {
        sequence += "<tr>";
        for (;(i < n) && (i % 21 < 20); i++) {
            temp = Math.floor(Math.random() * 30);
            if (count === 0) {
                max = temp;
                count++;
            }
            if ((count === 1) && (temp < max)) {
                pre_max = temp;
                count ++
            }
            if (temp > max) {
                pre_max = max;
                max = temp;
            } else if ((temp > pre_max) && (temp < max)) {
                pre_max = temp;
            }
            sequence += "<td>" + temp + "</td>";
        }
        sequence += "</tr>";
    }
    if ((n <= 0) || (n % 1 !== 0)) {
        sequence = "--невозможно сгенерировать--";
        pre_max = "#";
    } else {
        sequence += "</table>";
    }
    if (n === 1) {
        pre_max = "#";
    }
    document.getElementById("sequence").innerHTML = sequence;
    document.getElementById("count").innerHTML = String(pre_max);
}