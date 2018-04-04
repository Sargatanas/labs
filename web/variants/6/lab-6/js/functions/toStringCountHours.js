function toStringCountHours(count) {
    var hour = '';
    if ((count === 1) || ((count !== 11) && (count % 10 === 1))) {
        hour = ' час';
    } else if ((count === 2) || ((count !== 12) && (count % 10 === 2)) ||
        (count === 3) || ((count !== 13) && (count % 10 === 3)) ||
        (count === 4) || ((count !== 14) && (count % 10 === 4))) {
        hour = ' часа';
    } else {
        hour = ' часов';
    }
    return String(count) + hour;
}