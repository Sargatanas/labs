<?php
echo "Здравствуйте, ".(string)$_POST['name']."!<br>";
echo "Спасибо за заказ!<br>";
$sum = (double)$_POST['sum'];
$criterion = 0;
if ($sum >= 50000) {
    $sum_new = $sum * 0.8;
    $criterion = 1;
}
if ($criterion === 0) {
    echo "Итого сумма к оплате: ".$sum." руб.";
} else {
    echo "Сумма вашего заказа больше 50000, вам предоставлена скидка в 20%. Итого к оплате: ".$sum_new." руб.";
}