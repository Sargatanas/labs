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
    2. Вывести все счастливые билеты из отрезка [<i>M</i>, <i>N</i>], где <i>M</i> и <i>N</i> — шестизначные числа.
</div>
<br><hr><br>

<form method="get">
    <p>
        <label for="m">
            <i>M</i>:
        </label>
        <input type="number" min="100000" max="999999" id="m" name="m">
    </p>
    <p>
        <label for="n">
            <i>N</i>:
        </label>
        <input type="number" min="100000" max="999999" id="n" name="n">
    </p>
    <p>
        <input type="submit" value="Вывести">
    </p>
</form>

<div>
<?php
$m = $_GET['m'];
$n = $_GET['n'];

if (($n >= 100000) && ($n <= 999999) && ($m >= 100000) && ($m <= 999999)) {
    echo '<h2>Счастливые билеты</h2>';
    for ($i = $m; $i <= $n; $i++) {
        $temp = (string)$i;
        $first = $temp[0] + $temp[1] + $temp[2];
        $second = $temp[3] + $temp[4] + $temp[5];
        if ($first == $second) {
            echo $i . '<br>';
        }
    }
}
?>
</div>

</body>
</html>