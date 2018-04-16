function solution() {
    var status = document.getElementById('status');

    var name = document.getElementById('name');
    name.oninput = function () {
        status.innerHTML = 'Впишите сюда свое имя';
    };
    name.onblur = function () {
        status.innerHTML = '';
    };

    var ice_cream = document.getElementById('radio-1');
    ice_cream.onclick = function () {
        status.innerHTML = 'Вы выбрали мороженое';
    };
    var chocolate = document.getElementById('radio-2');
    chocolate.onclick = function () {
        status.innerHTML = 'Вы выбрали шоколад';
    };
}
solution();

function thanks() {
    var name = document.getElementById('name').value;
    alert('Уважаемый ' + name + '! Спасибо, что приняли участие в опросе');
}