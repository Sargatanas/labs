<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <title>Задание 1</title>
</head>
<body>

<h3>
    Задание 1
</h3>
<div style='margin: 20px 0;'>
    6. Написать программу, выводящую на экран таблицу, в которой количество строк и столбцов задается пользователем.
    В каждой ячейке выводится ее порядковый номер.
</div>
<br><hr><br>

<form method="get">
    <p>
        <label for="rows">
            Кол-во строк:
        </label>
        <input type="text" name="rows" id="rows">
    </p>
    <p>
        <label for="columns">
            Кол-во столбцов:
        </label>
        <input type="text" name="columns" id="columns">
    </p>
    <p>
        <input type="submit">
    </p>
</form>

<?php
$rows = $_GET['rows'];
$columns = $_GET['columns'];
$table = "<table style='border-collapse: collapse;'>";
for ($i = 0; $i < $rows; $i++) {
    $table .= "<tr>";
    for ($j = 0; $j < $columns; $j++) {
        $table .= "<td style='width: 60px; height: 35px; border: 1px solid #A5A5A5; text-align: center; vertical-align: middle;'>".($i + 1).".".($j + 1)."</td>";
    }
    $table .= "</tr>";
}
$table .= "</table>";
echo $table;
?>

</body>
</html>