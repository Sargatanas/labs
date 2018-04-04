<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Задание 6</title>
</head>
<body>

<a href="../..">Назад</a>

<br><br>

<div>
    6. Определить количество слов во введенном сообщении пользователя и вывести соответствующее сообщение.
</div>

<br><hr><br>

<form>
    <div>
        <input id="str" name="str" type="text" placeholder="предложение" value="<?= $_GET['str']?>" style="width: 500px;">
        <span>
            <button id="start">подсчитать</button>
        </span>
    </div>
</form>
<br>

<div class="panel panel-default">
    <h3>
        Результат
    </h3>
    <div>
        <div id="container" style="width: 100%">
             <?php
                $string = $_GET['str'];
                $string = trim($string);
                $string = str_replace('  ', ' ', $string);
                echo 'Количество обнаруженных слов: ' . (mb_substr_count($string, ' ') + 1);
             ?>
        </div>
</body>
</html>