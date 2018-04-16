function buttonMessage() {
    var button = document.getElementById('button');

    button.addEventListener('mouseover', function (b) {
        alert('Сообщение! Вы навели на кнопку, спасибо');
    })
}
buttonMessage();