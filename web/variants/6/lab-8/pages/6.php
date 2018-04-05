<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <title>Задание 6</title>
</head>
<body>

<h3>
    Задание 6
</h3>
<div style='margin: 20px 0;'>
    6. Программа-шифратор. Пользователь вводит слово и получает зашифрованное.
    Шифрование осуществляется сдвигом всех букв на 3 позиции вправо.<br>
    Например, зашифрованное слово "ИНФОРМАТИКА" выглядит так "ИКАИНФОРМАТ".
</div>
<br><hr><br>

<form method="get">
    <p>
        Введите слово:
        <input type="text" name="word">
    </p>
    <p>
        <input type="submit">
    </p>
</form>

<?php
$word = $_GET['word'];
if (mb_strlen($word) > 3) {
    $temp = mb_substr($word, mb_strlen($word) - 3, 3);
    $new_word = mb_substr($word, 0, mb_strlen($word) - 3);
    echo $temp;
    echo $new_word;
} else {
    echo $word;
}
?>

</body>
</html>