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
    7. Условие задачи аналогично предыдущему, но шифрование происходит по другой схеме: после каждых трех
    символов в слово вставляется буква "Е". например, Например, зашифрованное слово "ИНФОРМАТИКА" выглядит так
    "ИНФЕОРМЕАТИЕКА".
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
$word = mb_strtolower($_GET['word']);
if (mb_strlen($word) > 3) {
    $temp = '';
    for ($i = 1; $i <= mb_strlen($word); $i++) {
        if ($i % 3 == 0) {
            $temp .= mb_substr($word, $i - 1, 1);
            $temp .= '<span style="color: red;">е</span>';
        } else {
            $temp .= mb_substr($word, $i - 1, 1);
        }
    }
    echo $temp;
} else {
    echo $word;
}
?>

</body>
</html>