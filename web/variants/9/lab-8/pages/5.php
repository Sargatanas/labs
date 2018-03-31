<?php
    $persons = explode(PHP_EOL, file_get_contents('resources/persons.txt'));
    $one = [];
    $two = [];

    for ($i = 1; $i <= count($persons); $i++) {
        switch ($i % 3) {
            case 1: $one[] = $persons[$i-1];
                    break;
            case 2: $one[] = $persons[$i-1];
                    $two[] = $persons[$i-1];
                    break;
            case 0: $two[] = $persons[$i-1];
                    break;
        }
    }
    file_put_contents('resources/1.txt', join(PHP_EOL, $one));
    file_put_contents('resources/2.txt', join(PHP_EOL, $two));
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Задание 5</title>
</head>
<body>

<div>
    5. Дан файл, такой же, как в предыдущей задаче. Разбить его на два других файла, в первом будут
    храниться имена и фамилии пользователей, во втором – фамилии и возраст.
</div>

<br><hr><br>

<div>
    Файлы созданы! <br>
    origin: <a href="resources/persons.txt">persons.txt</a> <br>
    1: <a href="resources/1.txt">1.txt</a> <br>
    2: <a href="resources/2.txt">2.txt</a> <br>
</div>
</body>
</html>