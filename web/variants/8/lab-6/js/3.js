document.getElementById('go').addEventListener('click', solution);

function solution() {
    var date = new Date();
    var september_date = new Date(date.getFullYear(), 8, 1, 0, 0, 0, 0);
    var current_date = new Date(date.getFullYear(), date.getMonth(), date.getDate(), 0, 0, 0, 0);
    if (september_date < current_date) {
        september_date.setFullYear(date.getFullYear() + 1);
    }

    var count = Math.floor((september_date - current_date) / 1000 / 60 / 60 / 24 / 7);
    if (count === 0) {
        document.getElementById('count').innerHTML = '1 сентября на этой неделе';
    } else {
        document.getElementById('count').innerHTML = 'До 1 сентября осталось ' + toStringCountWeeks(count);
    }
}