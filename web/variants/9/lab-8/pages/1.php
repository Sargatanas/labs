<?php
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Задание 1</title>
</head>
<body>
<div>
    1. Вывести на экран строку разных размеров и цветов. Цвет изменяется от 111111 до 999999 с шагом 111111.
</div>
<br><hr><br>
<div>
    <?php
    for($i = 111111; $i <= 999999; $i+=111111) {
        $str = generateRandomString(mt_rand(20, 50));
        $size =  rand(12, 30);
        echo "<span style='background-color: #{$i}; font-size: {$size}px;'>{$str}</span><br>";
    }
    ?>
</div>
</body>
</html>