<?php
echo "<h3>Задание 3</h3>";
echo "<div style='margin: 20px 0;'>
          3. Написать функцию, которая находит номера максимального и минимального элементов 
          массива, а также среднее арифметическое всех элементов массива.
      </div>";

$size = 15;
$array[] = mt_rand(-100, 100);
$max = $array[0];
$num_max = 0;
$min = $array[0];
$num_min = 0;
$sum = $max;
for ($i = 1; $i < $size; $i++) {
    $temp = mt_rand(-100, 100);
    $array[] = $temp;
    if ($temp > $max) {
        $max = $temp;
        $num_max = $i;
    }
    if ($temp < $min) {
        $min = $temp;
        $num_min = $i;
    }
    $sum += $temp;
}
$sum = $sum / $size;

echo "<div>Полученный массив:</div><br>";
echo "<table style='border-collapse: collapse;'><tr>";
for ($i = 0; $i < $size; $i++) {
    echo "<td style=' width: 40px; padding: 5px; border: 1px solid black; text-align: center; color: #d0bacd;'>" .$i."</td>";
}
echo "</tr><tr>";
for ($i = 0; $i < $size; $i++) {
    echo "<td style=' width: 40px; padding: 5px; border: 1px solid black; text-align: center'>".$array[$i]."</td>";
}
echo "</tr></table>";
echo "<br>";
echo "<div>Максимальный элемент:&#160;&#160;".$max."&#160;&#160;под номером&#160;&#160;".$num_max."</div>";
echo "<br>";
echo "<div>Минимальный элемент:&#160;&#160;".$min."&#160;&#160;под номером&#160;&#160;".$num_min."</div>";
echo "<br>";
echo "<div>Среднее арифметическое:&#160;&#160;".$sum."</div>";