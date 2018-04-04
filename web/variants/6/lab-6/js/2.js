function solution() {
    var n = parseInt(document.getElementById('n').value);
    var k = parseInt(document.getElementById('k').value);
    var m = parseInt(document.getElementById('m').value);
    var result = '';
    var crit = true;

    if ((m < 0) || (m > 9) || isNaN(m)) {
        result = "Число <i>m</i> введено неверно";
        crit = false;
    }
    if ((k < 0) || isNaN(k)) {
        result = "Число <i>k</i> введено неверно";
        crit = false;
    }
    if ((n < 0) || isNaN(n)) {
        result = "Число <i>n</i> введено неверно";
        crit = false;
    }

    if (crit) {
        var pow = String(Math.pow(n, k));
        m = String(m);

        if (pow.indexOf(m) !== -1) {
            result = "<i>m</i> входит в <i>n<sup>k</sup></i> = " + pow;
        } else {
            result = "<i>m</i> <u>не входит</u> в <i>n<sup>k</sup></i> = " + pow;
        }
    }

    document.getElementById('result').innerHTML = result;
}