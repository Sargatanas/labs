<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Задание 6</title>
</head>
<body>

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
    <div>
        Результат
    </div>
    <br>
    <div>
        <div id="container" style="width: 100%">
             <?php
                 if(!empty($_GET['str'])) {
                    $namePattern = '/[\s,:?!]+/u';
                    $wordsArray = preg_split($namePattern, $_GET['str'], -1, PREG_SPLIT_NO_EMPTY);
                    $wordsArray2 = array_count_values($wordsArray);
                    arsort($wordsArray2);
                    echo 'Количество обнаруженных слов: ' . array_sum($wordsArray2);
                 }
             ?>
        </div>
</body>
</html>