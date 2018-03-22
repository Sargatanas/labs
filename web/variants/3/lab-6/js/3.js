function solution() {
    setInterval(function () {
        var data = new Date();
        var hours = String(data.getHours());
        if (hours <= 9) {
            hours = "0" + hours;
        }
        var minutes = String(data.getMinutes());
        if (minutes <= 9) {
            minutes = "0" + minutes;
        }
        var seconds = String(data.getSeconds());
        if (seconds <= 9) {
            seconds = "0" + seconds;
        }
        document.getElementById('answer').innerHTML = hours + ":" + minutes + ":" + seconds;
    }, 10);
}
solution();