<?php
$email = (string)$_POST['email'];
$pos = strripos($email, "@");
if ($pos === false) {
    echo "Вы ввели некорретную электронную почту (отсутствует символ @). Попробуйте еще раз";
} else {
    echo "Спасибо, все верно!";
}
echo "<br><br><a href='../6.html'>Назад</a>";