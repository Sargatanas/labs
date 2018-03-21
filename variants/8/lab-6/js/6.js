var num1=0, num2=0, oper=0;

function plug() {
    document.getElementById("monitor").value = '';
    num1 = 0; num2 = 0; oper = 0;
    document.getElementById("b0").disabled = false;
    document.getElementById("b1").disabled = false;
    document.getElementById("b2").disabled = false;
    document.getElementById("b3").disabled = false;
    document.getElementById("b4").disabled = false;
    document.getElementById("b5").disabled = false;
    document.getElementById("b6").disabled = false;
    document.getElementById("b7").disabled = false;
    document.getElementById("b8").disabled = false;
    document.getElementById("b9").disabled = false;
    document.getElementById("div").disabled = false;
    document.getElementById("off").disabled = false;
    document.getElementById("mult").disabled = false;
    document.getElementById("sqr").disabled = false;
    document.getElementById("sqrt").disabled = false;
    document.getElementById("subt").disabled = false;
    document.getElementById("fix").disabled = false;
    document.getElementById("res").disabled = false;
    document.getElementById("add").disabled = false;
    document.getElementById("pow").disabled = false;
}

function shut() {
    document.getElementById("monitor").value='';
    num1 = 0; num2 = 0; oper = 0;
    document.getElementById("b0").disabled = true;
    document.getElementById("b1").disabled = true;
    document.getElementById("b2").disabled = true;
    document.getElementById("b3").disabled = true;
    document.getElementById("b4").disabled = true;
    document.getElementById("b5").disabled = true;
    document.getElementById("b6").disabled = true;
    document.getElementById("b7").disabled = true;
    document.getElementById("b8").disabled = true;
    document.getElementById("b9").disabled = true;
    document.getElementById("div").disabled = true;
    document.getElementById("off").disabled = true;
    document.getElementById("mult").disabled = true;
    document.getElementById("sqr").disabled = true;
    document.getElementById("sqrt").disabled = true;
    document.getElementById("subt").disabled = true;
    document.getElementById("fix").disabled = true;
    document.getElementById("res").disabled = true;
    document.getElementById("add").disabled = true;
    document.getElementById("pow").disabled = true;
}

function digit(num) {
    document.getElementById("monitor").value += num;
}

function square(check) {
    var val = document.getElementById("monitor").value;
    (check) ? val = val * val : val = Math.sqrt(val);
    document.getElementById("monitor").value = val;
}

function expr(op) {
    num1 = document.getElementById("monitor").value;
    document.getElementById("monitor").value = '';
    if (num1 !== false) oper = op;
    else alert('Введите значение');
}

function result() {
    var R, c = 1;
    num2 = document.getElementById("monitor").value;
    switch (oper) {
        case 1 : R = num1 / num2; break;
        case 2 : R = num1 * num2; break;
        case 3 : R = num1 - num2; break;
        case 4 : R = num1 * c + num2 * c; break;
        case 5: R = Math.pow(num1, num2); break;
    }
    document.getElementById("monitor").value = R;
}