function solution() {
    var number = document.getElementById('number').value;
    var temp = "";

    var max = number[0];
    var min = number[0];
    number = (temp.length === 1) ? "" : number.substring(1);

    while (number !== "") {
        temp = number[0];
        number = (temp.length === 1) ? "" : number.substring(1);

        max = (Number(temp) > max) ? Number(temp) : max ;
        min = (Number(temp) < min) ? Number(temp) : min ;
    }

    document.getElementById('max').innerHTML = String(max);
    document.getElementById('min').innerHTML = String(min);
}