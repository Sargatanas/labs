function solution() {
    var criterion = true;

    if(!nameField('surname')) {
        criterion = false;
    } else if (!nameField('name')) {
        criterion = false;
    } else if (!nameField('patronymic')) {
        criterion = false;
    } else if (!nameField('street')) {
        criterion = false;
    }

    if (criterion) {
        var selector = document.getElementById('toy').value;
        if (selector === 'default') {
            criterion = false;
            alert('Выберите игрушку!');
        }
    }

    if (criterion) {
        alert('Ваш заказ успешно оформлен!');
    }
}