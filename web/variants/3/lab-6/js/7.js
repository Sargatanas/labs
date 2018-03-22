function solution() {
    var criterion = true;
    var city = document.getElementById('city').value;

    if(!nameField('surname')) {
        criterion = false;
    } else if (city === 'none') {
        alert('Выберите город! Мы ведь не знаем, откуда вы');
        criterion = false;
    } else {
        alert('О, вы из города ' + document.getElementById(city).innerHTML + '! У нас есть сотрудник оттуда =)');
        if (!document.getElementById('checkbox').checked) {
            alert ('Мы работает только с "не-роботами"');
            criterion = false;
        }
    }

    if (criterion) {
        alert('Ваш заказ успешно оформлен!');
    }
}