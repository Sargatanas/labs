<?php
$array = [
    'Рэп' => ['Ребенок рожденный сиять', 'Подгрузило', 'Спасибо'],
    'Поп' => ['Summer Jam', 'Это моя ночь', 'Find a way'],
    'Инди-рок' => ['Гипнозы'],
    'Хип-хоп' => ['Экстази', 'Ласковый зверь']
];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Задание 2</title>

    <style>
        table {
            border-collapse: collapse;
        }
        td, th {
            padding: 10px 20px;
            border: 1px solid lightgrey;
        }
        td {
            vertical-align: top;
        }
        ol, li {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<div>
    2. Создайте многомерный массив, содержащий названия музыкальных произведений, организованных по жанрам:
    ассоциативный массив, в котором имена полей будут разными жанрами («рок», «поп», «джаз» и др.),
    а элементами — названия песен. Выведите информацию.
</div>
<br><hr><br>
<h3>
    Готовый список:
</h3>
<div>
    <table>
        <tr>
            <?php

            foreach ($array as $key => $value) {
                echo '<th>' . $key . '</th>';
            }
            echo '</tr><tr>';
            foreach ($array as $key => $value) {
                echo '<td><ol>';
                foreach ($value as $music) {
                    echo '<li>' . $music . '</li>';
                }
                echo '</td></ol>';
            }
            echo '</tr>';
            ?>
        </tr>
    </table>
</div>
</body>
</html>