<?php
$word = (string)$_POST['word'];
$word_copy = $word;

if (strripos($word, " ") !== false) {
    echo "То, что содержит пробелы, словом не считается! Попробуйте еще раз";
} elseif ($word === "") {
    echo "Введите слово!";
} elseif (preg_match("/^([а-яА-ЯёЁa-zA-Z]+)$/u", $word)) {
    $words[] = mb_substr($word, 0, 1);
    $word = mb_substr($word, 1, mb_strlen($word) - 1);
    for (; $word !== ""; ) {
        $temp = mb_substr($word, 0, 1);
        $criterion = 1;
        for ($i = 0; $i < count($words); $i++) {
            if ($temp === $words[$i]) {
                $criterion = 0;
            }
        }
        if ($criterion === 1) {
            $words[] = $temp;
        }
        $word = mb_substr($word, 1, mb_strlen($word) - 1);
    }
    echo "<h4>Найденные различные буквы</h4>";
    for ($i = 0; $i < count($words); $i++) {
        $words[$i] = mb_strtolower($words[$i]);
        echo $words[$i]."<br>";
    }
    echo "<br>";
    for ($i = 0; $i < count($words); $i++) {
        for ($j = $i + 1; $j < count($words); $j++) {
            for ($k = $j + 1; $k < count($words); $k++) {
                if ($words[$i].$words[$j].$words[$k] !== $word_copy) {
                    $result[] = $words[$i].$words[$j].$words[$k];
                }
                if ($words[$i].$words[$k].$words[$j] !== $word_copy) {
                    $result[] = $words[$i].$words[$k].$words[$j];
                }
                if ($words[$j].$words[$i].$words[$k] !== $word_copy) {
                    $result[] = $words[$j].$words[$i].$words[$k];
                }
                if ($words[$j].$words[$k].$words[$i] !== $word_copy) {
                    $result[] = $words[$j].$words[$k].$words[$i];
                }
                if ($words[$k].$words[$i].$words[$j] !== $word_copy) {
                    $result[] = $words[$k].$words[$i].$words[$j];
                }
                if ($words[$k].$words[$j].$words[$i] !== $word_copy) {
                    $result[] = $words[$k].$words[$j].$words[$i];
                }
            }
        }
    }
    if (count($result) >= 3) {
        sort($result);
        echo "<h4>Варианты трехбуквенных слов</h4>";
        echo "<p>Всего слов: ".count($result)."</p>";
        for ($i = 0; $i < count($result); $i++) {
            echo $result[$i]."<br>";
        }
    } else {
        echo "Букв недостаточно для создания хотя бы одного трехбуквенного слова";
    }
} else {
    echo 'В вашем "слове" содержатся не только буквы';
}