<?php
$string = (string)$_POST['string'];
$color = (string)$_POST['color'];
$color = mb_strtolower($color);
$six[] = "0";
$six[] = "1";
$six[] = "2";
$six[] = "3";
$six[] = "4";
$six[] = "5";
$six[] = "6";
$six[] = "7";
$six[] = "8";
$six[] = "9";
$six[] = "a";
$six[] = "b";
$six[] = "c";
$six[] = "d";
$six[] = "e";
$six[] = "f";
$criterion_color = 1;
if (mb_strlen($color) !== 7) {
    $criterion_color = 0;
} else {
    if ($color{0} !== "#") {
        $criterion_color = 0;
    }
    for ($i = 1; $i <= 6; $i++) {
        if (!in_array($color{$i}, $six)) {
            $criterion_color = 0;
        }
    }
}
if ($criterion_color === 0) {
    echo "Вы ввели неверный цвет";
} else {
    echo "<div style='color: ".$color."; font-weight: bold';>".$string."</div>";
}