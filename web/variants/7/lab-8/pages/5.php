<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <title>Задание 5</title>
    <style>
        .error {
            margin: 20px;
            color: red;
        }
        .allright {
            margin: 20px;
            color: green;
        }
    </style>
</head>
<body>

<h3>
    Задание 5
</h3>
<div style='margin: 20px 0;'>
    7. Написать программу, сохраняющую в файле имена и пароли посетителей. Если имя повторяется, а введенный пароль
    не совпадает с паролем, хранящимся в файле, то вывести соответствующее сообщение.
</div>
<br><hr><br>

<form method="get">
    <p>
        <label for="name">
            Введите имя:
        </label>
        <input type="text" name="name" id="name" required>
    </p>
    <p>
        <label for="password">
            Введите пароль:
        </label>
        <input type="password" name="password" id="password" required>
    </p>
    <p>
        <input type="submit">
    </p>
</form>
<p>
    Файл: <a href="resources/5.txt" target="_blank">[ссылка]</a>
</p>

<?php
$current = file_get_contents('resources/5.txt');
$name = $_GET['name'];
$password = $_GET['password'];
$output = '';

if (!empty($name) && !empty($password)) {
    if (substr_count($current, $name) == 0) {
        $output = $name . ' ' . $password . PHP_EOL;
        file_put_contents('resources/5.txt', $output, FILE_APPEND);
        echo '<div class="allright">Данные успешно записаны</div>';
    } elseif (substr_count($current, $name . ' ' . $password) == 0) {
        echo '<div class="error">Ошибка! Пользователь существует, но пароль введен неверно</div>';
    } else {
        echo '<div class="allright">Пользователь существует, пароль введен верно</div>';
    }
}
?>

</body>
</html>