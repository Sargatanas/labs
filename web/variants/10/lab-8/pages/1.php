<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Задание 1</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 40px;
            height: 30px;
        }
    </style>
</head>
<body>
<div>
    1. Вывести на экран таблицу умножения для шестнадцатеричной системы счисления.
</div>
<br><hr><br>
<table>
    <tr>
        <td>*</td>
        <td>0</td>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
        <td>6</td>
        <td>7</td>
        <td>8</td>
        <td>9</td>
        <td>A</td>
        <td>B</td>
        <td>C</td>
        <td>D</td>
        <td>E</td>
        <td>F</td>
    </tr>
    <?php
    $elements = ['0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F'];

    for ($i = 0; $i < 16; $i++) {
        echo "<tr>";
        echo "<td>" . $elements[$i] . "</td>";
        for ($j = 0; $j < 16; $j++) {
            echo "<td>" . strtoupper(dechex($i * $j)) . "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>