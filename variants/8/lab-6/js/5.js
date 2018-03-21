document.body.onload = solution();

function solution() {
    var href = window.location.hostname;
    document.getElementById('solution').innerHTML = '<a href="' + href + '/index.html" target="_blank">Ссылка</a>';
}