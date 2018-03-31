<?php
    $images = array_values(array_diff(array_map(function($file) {
        if(!in_array($file, ['.', '..'])) {
            $info = pathinfo('./resources/img/' . $file);
            return [
                'full_name' => $file,
                'path' => './resources/img/' . $file,
                'name' => $info['filename'],
                'size' => filesize(getcwd() . '/resources/img/' . $file) . ' байт'
            ];
        } else {
            return null;
        }
    }, scandir('./resources/img')), ['']));
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Задание 2</title>
</head>
<body>
<div>

    <div>
        2. Создайте массив, содержащий сведения о картинках: местонахождение и имя файла,
        хранящего картинку, ее размеры, название. Выведите все картинки на экран с полной информацией о них.
    </div>

    <br><hr><br>
    <?php
    foreach ($images as $image) {
        echo "
              <div style='margin-bottom: 30px'>
                  <img src='{$image['path']}'>
                  <div>
                      Полный путь: {$image['path']} <br>
                      Имя файла: {$image['name']} <br>
                      Размер файла: {$image['size']} <br>                                
                  </div>
              </div>
              ";
    }
    ?>
</div>
</body>
</html>