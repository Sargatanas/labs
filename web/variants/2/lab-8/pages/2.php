<?php
$array = [
    'Мелодрама' => ['Нож в воде', 'Пассажиры'],
    'Детектив' => ['Бегущий в лабиринте', 'Инферно', 'Шерлок Холмс 2: Игра теней'],
    'Боевик' => ['Мстители', 'Отряд самоубийц'],
    'Фэнтези' => ['Третий лишний', 'Хоббит: Пустошь Смауга', 'Властелин колец: Братство кольца', 'Люди Икс: Апокалипсис'],
    'Индийский фильм' => ['Непохищенная невеста', 'Пока я жив', 'Индия, вперед!']
];
?>

<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <title>Задание 2</title>
</head>
<body>
<h3>
    Задание 2
</h3>
<div style='margin: 20px 0;'>
    2. Просмотрите массив (см. предыдущую задачу) в цикле, выводя название жанра и связанные с ним фильмы.
</div>
<br><hr><br>

<?php
foreach ($array as $key => $values) {
    echo '<h2>' . $key .  '</h2>';
    echo '<ul>';
    foreach ($values as $value) {
        echo '<li>' . $value .'</li>';
    }
    echo '</ul>';
}
?>

</body>
</html>