<?php
// Получим содежимое файла
$text = file_get_contents('resources/file.txt');

// Удалим переводы строк на пробелы
$text = str_replace(PHP_EOL, ' ', $text);
for (; strrpos($text, '  ') !== false; ) {
    $text = str_replace('  ', ' ', $text);
}
$text = str_replace(',', '.', $text);

// Разберем числа из строки в массив
$numbers = explode(' ', $text);

// Переведем все в числа
foreach ($numbers as $value) {
    $value = settype($value, 'double');
}

// Обработаем массив
$min = (float)$numbers[0];
foreach ($numbers as $value) {
    $min = ((float)$value < $min) ? $value: $min;
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Задание 5</title>
</head>
<body>
<div>
    5. Файл содержит вещественные числа. Найти минимальный элемент.
</div>
<br><hr><br>
<a href="resources/file.txt">Файл</a>
<br><br>
<div>
    <?php
    echo 'Наименьшее число в массиве ' . $min;
    ?>
</div>
</body>
</html>