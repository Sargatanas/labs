function solution() {
    var date = new Date();
    var new_year = new Date(date.getFullYear() + 1, 0, 1, 0, 0, 0, 0);
    var temp = Math.ceil((new_year - date) / 1000 / 60 / 60) + new Date().getTimezoneOffset();
    console.log(new Date().getTimezoneOffset() / 60);
    document.getElementById("result").innerHTML = toStringCountHours(temp);

    setInterval(function () {
        date = new Date();
        new_year = new Date(date.getFullYear() + 1, 0, 1, 0, 0, 0, 0);
        temp = Math.ceil((new_year - date) / 1000 / 60 / 60) + new Date().getTimezoneOffset();
        document.getElementById("result").innerHTML = toStringCountHours(temp);
    }, 1000)
}
solution();