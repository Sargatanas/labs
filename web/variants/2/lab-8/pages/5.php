<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <title>Задание 5</title>
</head>
<body>

<h3>
    Задание 5
</h3>
<div style='margin: 20px 0;'>
    2. Написать программу, которая читает из файла данные, записанные программой из предыдущей задачи.
    Эта программа должна вывести данные в браузер, а в конце вывести итоги, в том числе размер файла и количество строк.
</div>
<br><hr>
<p>
    Файл: <a href="resources/5.txt">[ссылка]</a>
</p>

<?php
if (filesize("resources/5.txt") > 3) {
    $array = file_get_contents('resources/5.txt');
    $array = explode(PHP_EOL, $array);

    echo '<h3>Содежимое файла:</h3>';
    foreach ($array as $value) {
        echo $value . '<br>';
    }

    echo '<h3>Объем файла:</h3>';
    echo filesize("resources/5.txt") . ' байт';

    echo '<h3>Количество строк:</h3>';
    echo count($array);
} else {
    echo '<h3>Содежимое файла:</h3>';
    echo '-файл пуст-';
    echo '<h3>Объем файла:</h3>';
    echo '0';
    echo '<h3>Количество строк:</h3>';
    echo '0';
}
?>

</body>
</html>