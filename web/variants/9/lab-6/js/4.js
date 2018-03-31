function solution() {
    var element_1 = document.getElementById('element_1');
    var element_2 = document.getElementById('element_2');

    element_1.addEventListener('mouseover', function () {
        document.body.style.background = "#c4ff89";
    });
    element_2.addEventListener('mouseover', function () {
        document.body.style.background = "#ffffff";
    });
}
solution();