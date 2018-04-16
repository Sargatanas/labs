<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <title>Задание 3</title>
</head>
<body>

<h3>
    Задание 3
</h3>
<div style='margin: 20px 0;'>
    7. Написать функцию, выводящую строку заданного размера шрифта. Строка и размер шрифта задаются в качестве
    аргументов функции.
</div>
<br><hr><br>

<form method="get">
    <p>
        <label for="string">
            Строка:
        </label>
        <input type="text" id="string" name="string">
    </p>
    <p>
        <label for="size">
            Размер шрифта:
        </label>
        <input type="number" min="1" id="size" name="size">
    </p>
    <p>
        <input type="submit" value="Вывести">
    </p>
</form>

<?php
$string = $_GET['string'];
$size = $_GET['size'];
resize($string, $size);

function resize($str, $sz) {
    echo '<div style="font-size: ' . $sz . 'px;">' . $str . '</div>';
}
?>

</body>
</html>