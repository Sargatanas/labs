function solution() {
    id = 'solution';
    year = new Date().getFullYear();

    //рассчитаем количество дней в месяце
    let date = new Date(year, new Date().getMonth(), 1);
    let month = date.getMonth();
    let count_days = 33 - new Date(year, month, 33).getDate();

    //получим название месяца и год
    let string = '';
    switch (month) {
        case 0 : string = 'Январь'; break;
        case 1 : string = 'Февраль'; break;
        case 2 : string = 'Март'; break;
        case 3 : string = 'Апрель'; break;
        case 4 : string = 'Май'; break;
        case 5 : string = 'Июнь'; break;
        case 6 : string = 'Июль'; break;
        case 7 : string = 'Август'; break;
        case 8 : string = 'Сентябрь'; break;
        case 9 : string = 'Октябрь'; break;
        case 10 : string = 'Ноябрь'; break;
        case 11 : string = 'Декабрь'; break;
    }
    string += ' ' + date.getFullYear();

    //очистим календарь до шапки
    document.getElementById(id).innerHTML = `<tr>
                                                <th colspan="7" class="table-header">${string}</th>
                                             </tr>
                                             <tr>
                                                <th>пн</th>
                                                <th>вт</th>
                                                <th>ср</th>
                                                <th>чт</th>
                                                <th>пт</th>
                                                <th>сб</th>
                                                <th>вс</th>
                                             </tr>`;

    //рассчитаем день недели
    let day = date.getDay();
    if (day === 0) {
        day = 7;
    }

    // заполним первую строку календаря
    string = '<tr>';
    for (var i = 1; i < day; i++)
        string += '<td>&#8196;</td>';
    var cur_days = count_days - 1;
    for (i = day; i <= 7; i++)
    {
        if (count_days - cur_days === new Date().getDate()) {
            string += '<td style="background: peachpuff;">';
        } else {
            string += '<td>';
        }
        string += (count_days - cur_days) + '</td>';
        cur_days--;
    }
    document.getElementById(id).innerHTML += string + '</tr>';

    // заполним прочие ячейки
    for (; cur_days > -1;)
    {
        string = '<tr>';
        for (i = 1; i <= 7; i++)
        {
            if (cur_days > -1)
            {
                if (count_days - cur_days === new Date().getDate()) {
                    string += '<td style="background: peachpuff;">';
                } else {
                    string += '<td>';
                }
                string += (count_days - cur_days) + '</td>';
                cur_days--;
            }
            else
                string += '<td>&#8196;</td>';
        }
        document.getElementById(id).innerHTML += string + '</tr>';
    }
}
solution();