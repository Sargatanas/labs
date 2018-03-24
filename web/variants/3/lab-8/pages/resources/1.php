<?php

$a = (integer)$_POST['a'];
$b = (integer)$_POST['b'];
$table = "<table style='border-collapse: collapse;'>";
$style = " style='border: 1px solid black; padding: 5px; text-align: center;'";
$table .= "<tr>";
$table .= "<th".$style.">Делимое</th>";
$table .= "<th".$style.">Делитель</th>";
$table .= "<th".$style.">Частное</th>";
$table .= "<th".$style.">Остаток</th>";
$table .= "</tr>";
$count = 0;
for ($i = -$b; $i <= $b; $i++) {
    if ($i === 0) {
        $quotient = "none";
        $remainder = "none";
    } else {
        if ($i < 0) {
            $quotient = ceil($a / $i);
        } else {
            $quotient = floor($a / $i);
        }
        $remainder = $a - $i * $quotient;
    }
    $table .= "<tr>";
    if ($count === 0) {
        $size = $b * 2 + 1;
        $table .= "<td rowspan='".$size."' ".$style." >".$a."</td>";
        $count++;
    }
    $table .= "<td".$style.">".$i."</td>";
    $table .= "<td".$style.">".$quotient."</td>";
    $table .= "<td".$style.">".$remainder."</td>";
    $table .= "</tr".$style.">";
}
$table .= "</table>";

echo $table;