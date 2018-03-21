<?php
$language = (string)$_POST['language'];
if ($language == "-сделайте выбор-") {
    echo "<div>Сделайте, пожалуйста, выбор</div>
          <br>
          <a href='../4.html'>Назад</a>";
} elseif ($language === "русский") {
    echo   "<div>Вы выбрали русский язык отображения страницы!</div>
            <br>
            <div>Теперь тут русский контент</div>";
} else {
    echo   "<div>You have selected the English language display page!</div>
            <br>
            <div>Now here is the English-language content</div>";
}