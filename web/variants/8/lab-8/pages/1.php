<?php
echo '<a href="../../index.html">Назад</a><br><br>';
echo '<div style="margin: 20px 0;">8. Вывести на экран таблицу, ячейки которой закрашены в разные цвета, а номера цветов отображаются в соответствующих ячейках. Номера цветов изменяются от 555555 до 999999 с шагом 1111</div>';

$number = 555555;
$delta_number = 1111;
$max_number = 999999;
$number = (int)base_convert($number, 16, 10);
$delta_number = (int)base_convert($delta_number, 16, 10);
$max_number = (int)base_convert($max_number, 16, 10);
$result = "";
$result .= "<table style='border-collapse: collapse;'>";
for (;$number <= $max_number;) {
    $result .= "<tr>";
    for ($i = 0; $i < 16; $i++) {
        if ($number <= $max_number) {
            $temp = base_convert($number, 10, 16);
            for (; strlen($temp) < 6; ) {
                $temp = '0'.$temp;
            }
            $temp = '#'.$temp;
            $result .= "<td style='background: {$temp}'>{$temp}</td>";
            $number += $delta_number;
        } else {
            $result .= "<td> </td>";
        }
    }
    $result .= "</tr>";
}
$result .= "</table>";

echo $result;