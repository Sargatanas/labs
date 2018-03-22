function solution() {
    var id = setTimeout(function() {
        document.getElementById("focus").style.background = "#FFD11A";
        document.getElementById("message").innerHTML = "Скоро будет еще один цветной сюрприз...";
    }, 3000);
    id = setTimeout(function() {
        document.getElementById("focus").style.background = "#ADEE7B";
        document.getElementById("message").innerHTML = "А вот и он! Вуаля!";
    }, 6000);
    id = setTimeout(function() {
        document.getElementById("focus").style.background = "white";
        document.getElementById("message").innerHTML = "";
    }, 9000);
}
function goFocus() {
    solution();
    setInterval(solution, 9000)
}
goFocus();