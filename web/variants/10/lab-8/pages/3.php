<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Задание 3</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 20px;
            height: 20px;
            border: 1px solid lightgrey;
            vertical-align: middle;
            align-items: center;
        }
    </style>
</head>
<body>
<div>
    3. Написать функцию, формирующую таблицу сложения в указанной системе счисления p (2≤p≤16).
    Основание системы счисления передается в качестве аргумента.
</div>
<br><hr><br>
<form>
    <label for="base">
        Основание системы счисления:
    </label>
    <br><br>
    <input type="number" min="2" max="16" id="base" name="base" style="width: 200px">
    <input type="submit" value="Построить таблицу">
</form>
<br>
<table>
    <?php
    $base = $_GET['base'];
    if (empty($base)) {
        $base = -1;
    }
    $elements = ['0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F'];

    for ($i = -1; $i < $base; $i++) {
        echo '<tr>';
        for ($j = -1; $j < $base; $j++) {
            if ($i === -1) {
                echo '<td>' . $elements[$j] . '</td>';
            } elseif ($j === -1) {
                echo '<td>' . $elements[$i] . '</td>';
            } else {
                echo '<td>' . strtoupper(base_convert($i + $j, 10, $base)) . '</td>';
            }
        }
        echo '</tr>';
    }
    ?>
</table>
</body>
</html>