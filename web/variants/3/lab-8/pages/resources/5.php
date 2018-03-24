<?php
$name = (string)$_POST['name'];
$text = (string)$_POST['text'];
$output = 'Пользователь: ' . $name . PHP_EOL . 'Сообщение: ' . $text;

if (filesize('5.txt') > 3) {
    $output = PHP_EOL . PHP_EOL . $output;
}
file_put_contents('5.txt', $output, FILE_APPEND | LOCK_EX);

$content = file_get_contents('5.txt');
$content = nl2br($content);

echo $content;
echo "<br><br>";
echo "<a href='5.txt' target='_blank'>Файл</a>";