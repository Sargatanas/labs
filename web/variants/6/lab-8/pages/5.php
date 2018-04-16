<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <title>Задание 5</title>
</head>
<body>

<h3>
    Задание 5
</h3>
<div style='margin: 20px 0;'>
    6. Написать сценарий, который сохраняет в отдельном файле имя и сообщение каждого посетителя,
    файлы хранить в отдельном каталоге.
    <br>
    <u>Примечание:</u> php плохо работает с кириллицей. Для адекватной работы программы лучше вводить сообщение
    и имя на литиннице. На кириллице файл будет создаваться, его можно прочитать в папке, но отображаться
    в браузере он будет некорректно.
</div>
<br><hr><br>

<form method="get"">
    <p>
        <label for="name">
            Введите имя:
        </label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <label for="message">
            Введите ваше сообщение:
        </label>
        <br><br>
        <textarea name="message" id="message" cols="80" rows="8"></textarea>
    </p>
    <p>
        <input type="submit">
    </p>
</form>

<?php
$name_of_file = date('j-m-y_G-i-s');
$name = $_GET['name'];
$message = $_GET['message'];
if (!empty($name) && !empty($message)) {
    $file = fopen("resources/{$name_of_file}.txt", 'w+');
    $test = fwrite($file, "User name:\r\n".$name."\r\n\r\n"."Message:\r\n".$message);
    if ($test) {
        echo 'Данные в файл успешно занесены.<br><br>';
    } else {
        echo 'Ошибка при записи в файл. Попробуйте еще раз.<br><br>';
    }
    fclose($file);
}

echo "Текущее содержание:<br>";
$files = array_values(array_diff(array_map(function($file) {
    if(!in_array($file, ['.', '..'])) {
        $info = pathinfo('resources/' . $file);
        return [
            'path' => 'resources/' . $file,
            'name' => $info['filename']
        ];
    } else {
        return null;
    }
}, scandir('resources')), ['']));

echo "<ol>";
foreach($files as $file) {
    echo "<li><a href='" . $file['path'] . "'>" . $file['name'] . "</a></li>";
}
echo "</ol>";
?>

</body>
</html>