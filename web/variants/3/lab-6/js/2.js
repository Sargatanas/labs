function solution() {
    var n = document.getElementById("m").value;
    var m = document.getElementById("n").value;
    var answer = "";
    var char, length;
    for (; n !== '';) {
        char = n.substring(0, 1);
        if (n.length !== 1) {
            n = n.substring(1, n.length);
        } else {
            n = "";
        }
        if ((m.indexOf(char) !== -1) && (answer.indexOf(char) === -1) && (char !== "-")) {
            answer += char + ", ";
        }
    }
    console.log(answer.length, answer);
    if (answer === "") {
        answer = "--совпадения отсутствуют--";
    } else {
        answer = answer.substr(0, answer.length - 2);
    }
    document.getElementById("answer").innerHTML = answer;
}