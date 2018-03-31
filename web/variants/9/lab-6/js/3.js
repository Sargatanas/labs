function solution() {
    var date = new Date();
    var september_date = new Date(date.getFullYear(), 8, 1, 0, 0, 0, 0);
    var current_date = new Date(date.getFullYear(), date.getMonth(), date.getDate(), 0, 0, 0, 0);
    if (current_date - september_date < 0) {
        september_date = new Date(date.getFullYear() - 1, 8, 1, 0, 0, 0, 0);
    }

    var count = Math.floor((current_date - september_date) / 1000 / 60 / 60 / 24 / 7);
    document.getElementById('count').innerHTML = 'C 1 сентября прошло ' + toStringCountWeeks(count);
}

solution();