function solutionOn() {
    window.status = "Википедия: Строка состояния";
    document.getElementById("output").innerHTML = "Википедия: Строка состояния";
}
document.getElementById('href').addEventListener('mouseover', solutionOn);

function solutionOff() {
    window.status = '';
    document.getElementById("output").innerHTML = "&#8196;";
}
document.getElementById("href").addEventListener('mouseout', solutionOff);