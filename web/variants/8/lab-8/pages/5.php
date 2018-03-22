<?php
echo '<a href="../index.html">Назад</a><br><br><br>';
echo '<div style="margin: 20px 0;">8. Дан файл. В первой строке хранится имя первого пользователя, во второй – фамилия, 
в третьей – возраст, в четвертой – имя второго пользователя, в пятой – его фамилия и т.д.<br>Сформировать ассоциативный 
массив из элементов файла.</div>';

echo '<p>Файл: <a href="resources/5.txt">ссылка</a></p>';

$file = fopen("resources/5.txt", "r");
if (mb_strlen(file_get_contents("resources/5.txt")) !== 0) {
    $array[] = ['Имя' => fgets($file), 'Фамилия' => fgets($file), 'Возраст' => fgets($file)];
    for (; !feof($file); ) {
        $array[] = ['Имя' => fgets($file), 'Фамилия' => fgets($file), 'Возраст' => fgets($file)];
    }
    if ($array[0]['Имя'] !== "") {
        foreach ($array as $key=>$value) {
            echo "Имя: ".mb_convert_encoding($array[$key]['Имя'], "UTF-8", "Windows-1251")."<br>";
            echo "Фамилия: ".mb_convert_encoding($array[$key]['Фамилия'], "UTF-8", "Windows-1251")."<br>";
            echo "Возраст: ".mb_convert_encoding($array[$key]['Возраст'], "UTF-8", "Windows-1251")."<br><br>";
        }
    }
} else {
    echo "Файл пуст";
}
fclose($file);
