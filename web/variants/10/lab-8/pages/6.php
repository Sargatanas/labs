<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Задание 6</title>
</head>
<body>
<div>
    6. Тэг курсива. Дан текст, в котором встречаются структуры "&lt;i>" и "&lt;/i>". Заменить каждое вхождение "&lt;i>"
    на "&lt;курсив>", а каждое вхождение "&lt;/i>" на "&lt;конец курсива>".
    <br><br>
    <u>Замечание</u>. В программе следует учесть, что буква «i» может быть как строчной, так и прописной.
</div>
<br><hr><br>
<form>
    <label for="string">
        Строка:
    </label>
    <br><br>
    <textarea id="string" name="string" style="max-width: 500px; min-width: 500px; min-height: 200px"></textarea>
    <br><br>
    <input type="submit" value="Заменить">
</form>
<br>
<div>
    <?php
    $string = $_GET['string'];
    $string = str_replace('I', 'i', $string);
    $string = str_replace('<i>', '<курсив>', $string);
    $string = str_replace('</i>', '<конец курсива>', $string);
    $string = str_replace(PHP_EOL, '<br>', $string);

    echo $string;
    ?>
</div>
</body>
</html>