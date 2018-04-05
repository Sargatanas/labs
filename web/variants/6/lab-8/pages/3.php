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
    6. Написать функцию, возвращающую сумму всех элементов целочисленного массива.
</div>
<br><hr><br>

<form method="get">
    <p>
        <label for="elements">
            Кол-во элементов массива:
        </label>
        <input type="number" min="1" name="elements" id="elements">
    </p>
    <p>
        <input type="submit" value="Сформировать массив">
    </p>
</form>

<?php
$size = $_GET['elements'];
$array[0] = mt_rand(-100, 100);
$sum = 0;
for ($i = 0; $i < $size; $i++) {
    $temp = mt_rand(-100, 100);
    $array[$i] = $temp;
    $sum += $temp;
}

echo "<div>Полученный массив:</div><br>";
echo "<table style='border-collapse: collapse;'><tr>";
echo "</tr><tr>";
$count = 1;
for ($i = 0; $i < $size; $i++) {
    echo "<td style=' width: 40px; padding: 5px; text-align: center'>".$array[$i]."</td>";
    $count++;
    if ($count > 20) {
        echo "</tr><tr>";
        $count = 1;
    }
}
echo "</tr></table>";
echo "<br>";
echo "<div>Сумма элементов:&#160;&#160;{$sum}</div>";
?>

</body>
</html>