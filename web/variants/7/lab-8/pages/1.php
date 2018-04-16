<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <title>Задание 1</title>

    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 40px;
            height: 40px;
            border: 1px solid grey;
            line-height: 40px;
            text-align: center;
        }
    </style>
</head>
<body>

<h3>
    Задание 1
</h3>
<div style='margin: 20px 0;'>
    7. Вывести на экран решето Эратосфена. Это таблица, в которой содержатся натуральные числа от 2 до a включительно,
    где составные числа перечеркнуты.
</div>
<br><hr><br>

<form method="get">
    <p>
        <label for="a">
            Введите <i>a</i>:
        </label>
        <input type="number" id="a" name="a" min="1" required>
    </p>
    <p>
        <input type="submit" value="Построить">
    </p>
</form>

<?php
$a = $_GET['a'];

echo '<table>';
echo '<tr>';
echo '<td>#</td>';

$count = 2;
for ($i = 2; $i <= $a; $i++) {
    if (isComposite($i)) {
        echo '<td style="background: #ffcdca;"><del>' . $i . '</del></td>';
    } else {
        echo '<td style="background: #dfffd6;">' . $i . '</td>';
    }
    if ($count > 9) {
        echo '</tr><tr>';
        $count = 1;
    } else {
        $count++;
    }
}

function isComposite($num) {
    $crit = false;
    for ($j = 2; $j <= sqrt($num); $j++) {
        if ($num % $j == 0) {
            $crit = true;
        }
    }
    return $crit;
}
?>

</body>
</html>