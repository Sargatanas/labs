function dateTime() {
    var months = ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня',
                  'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'];
    var week = ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'];

    var date = new Date();
    var output = '';

    output += String(date.getDate());
    output += ' ' + months[date.getMonth()];
    output += ' ' + String(date.getFullYear()) + ' года';
    output += ' (' + week[date.getDay()] + ')';
    if (date.getHours() < 10) {
        output += ', 0' + String(date.getHours());
    } else {
        output += ', ' + String(date.getHours());
    }
    if (date.getMinutes() < 10) {
        output += ':0' + String(date.getMinutes());
    } else {
        output += ':' + String(date.getMinutes());
    }
    if (date.getSeconds() < 10) {
        output += ':0' + String(date.getSeconds());
    } else {
        output += ':' + String(date.getSeconds());
    }

    document.getElementById('date').innerHTML = output;
}

setInterval(dateTime, 10);