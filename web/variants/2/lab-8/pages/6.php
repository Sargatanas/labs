<?php
$array = [];
for ($i = 1; $i <= 15; $i++) {
    $var = rand(0, 1);
    if ($var == 0) {
        $temp = rand(-9, 9) + rand(-9, 9) * 0.1 + rand(-9, 9) * 0.01;
        $array[] = $temp;
    } else {
        $temp = rand(-9, 9);
        $array[] = $temp;
    }
}
?>

<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <title>Задание 6</title>

    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 60px;
            height: 40px;
            border: 1px solid gray;
            line-height: 40px;
            text-align: center;
        }
    </style>
</head>
<body>

<h3>
    Задание 6
</h3>
<div style='margin: 20px 0;'>
    2. Создать массив из целых и вещественных чисел. Вывести все его элементы в поля шириной 15 символов,
    преобразовывая их в целые значения.
</div>
<br><hr>

<?php
echo '<h3>Исходный массив:</h3>';
echo '<table><tr>';
foreach ($array as $value) {
    echo '<td>' . $value . '</td>';
}
echo '</tr></table>';

echo '<h3>Итог:</h3>';
foreach ($array as $value) {
    echo '<input type="text" maxlength="15" value="' . (int)$value . '" readonly>';
    echo '<br><br>';
}
?>

</body>
</html>