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
            width: 60px;
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
    2. Вывести таблицу умножения на <i>p</i>, используя различные циклы.
</div>
<br><hr><br>

<form method="get">
    <p>
        <label for="p">
            Введите <i>p</i>:
        </label>
        <input type="number" id="p" name="p" min="1" required>
    </p>
    <p>
        <input type="submit" value="Вывести">
    </p>
</form>

<?php
$p = $_GET['p'];

if ($p > 0) {
    $string_1 = '';
    $string_2 = '';
    echo '<h2>Цикл while</h2>';

    echo '<pre>
    $string_1 = \'\';
    $string_2 = \'\';
    $i = 1;
    while ($i <= 10) {
        $string_1 .= \'&lt;td>\' . $i . \'&lt;/td>\';
        $string_2 .= \'&lt;td>\' . $i * $p . \'&lt;/td>\';
        $i++;
    }
    echo \'&lt;table>&lt;tr>\';
    echo $string_1;
    echo \'&lt;/tr>&lt;tr>\';
    echo $string_2;
    echo \'&lt;/tr>&lt;/table>\';
          </pre>';

    $i = 1;
    while ($i <= 10) {
        $string_1 .= '<td>' . $i . '</td>';
        $string_2 .= '<td>' . $i * $p . '</td>';
        $i++;
    }

    echo '<table><tr>';
    echo $string_1;
    echo '</tr><tr>';
    echo $string_2;
    echo '</tr></table>';



    $string_1 = '';
    $string_2 = '';
    echo '<h2>Цикл do-while (аналог repeat-until)</h2>';

    echo '<pre>
    $string_1 = \'\';
    $string_2 = \'\';
    $i = 1;
    do {
        $string_1 .= \'&lt;td>\' . $i . \'&lt;/td>\';
        $string_2 .= \'&lt;td>\' . $i * $p . \'&lt;/td>\';
        $i++;
    } while ($i <= 10);
    echo \'&lt;table>&lt;tr>\';
    echo $string_1;
    echo \'&lt;/tr>&lt;tr>\';
    echo $string_2;
    echo \'&lt;/tr>&lt;/table>\';
          </pre>';

    $i = 1;
    do {
        $string_1 .= '<td>' . $i . '</td>';
        $string_2 .= '<td>' . $i * $p . '</td>';
        $i++;
    } while ($i <= 10);

    echo '<table><tr>';
    echo $string_1;
    echo '</tr><tr>';
    echo $string_2;
    echo '</tr></table>';



    $string_1 = '';
    $string_2 = '';
    echo '<h2>Цикл for</h2>';

    echo '<pre>
    $string_1 = \'\';
    $string_2 = \'\';    
    for ($i = 1; $i <= 10; $i++) {
        $string_1 .= \'&lt;td>\' . $i . \'&lt;/td>\';
        $string_2 .= \'&lt;td>\' . $i * $p . \'&lt;/td>\';
    };
    echo \'&lt;table>&lt;tr>\';
    echo $string_1;
    echo \'&lt;/tr>&lt;tr>\';
    echo $string_2;
    echo \'&lt;/tr>&lt;/table>\';
         </pre>';

    for ($i = 1; $i <= 10; $i++) {
        $string_1 .= '<td>' . $i . '</td>';
        $string_2 .= '<td>' . $i * $p . '</td>';
    };

    echo '<table><tr>';
    echo $string_1;
    echo '</tr><tr>';
    echo $string_2;
    echo '</tr></table>';
}
?>

</body>
</html>