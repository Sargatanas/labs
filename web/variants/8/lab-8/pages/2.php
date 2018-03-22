<?php
echo '<a href="../../index.html">Назад</a><br><br>';
echo '<div style="margin: 20px 0;">8. Создайте массив, содержащий сведения о продукции фирмы: номер товара, название, цена. Отсортируйте массив по названиям в алфавитном порядке. Среди товаров с одинаковым названием сначала идут более дешевые.</div>';

$statement = [
    ['Код товара'=>'025', 'Название'=>'Чудо-чемоданчик "Друзья", Mapacha', 'Цена'=>590],
    ['Код товара'=>'003', 'Название'=>'Бизиборд Крона "Развивайка"', 'Цена'=>1399],
    ['Код товара'=>'027', 'Название'=>'Игрушка TOMY Найди яйцо', 'Цена'=>759],
    ['Код товара'=>'029', 'Название'=>'Деревянная рамка-вкладыш Томик "Животные"', 'Цена'=>226],
    ['Код товара'=>'006', 'Название'=>'Деревянная рамка-вкладыш Томик "Животные"', 'Цена'=>191],
    ['Код товара'=>'007', 'Название'=>'Стеллар Пирамидка "Теремок"', 'Цена'=>160],
    ['Код товара'=>'026', 'Название'=>'Деревянная рамка-вкладыш Томик "Игрушки"', 'Цена'=>191],
    ['Код товара'=>'025', 'Название'=>'Каталка "Вертолетик", Стеллар', 'Цена'=>300],
    ['Код товара'=>'016', 'Название'=>'Игрушка-подвеска Жирафики "Собачка Билли"', 'Цена'=>360],
    ['Код товара'=>'020', 'Название'=>'Ходунки Зебра, Fisher-Price', 'Цена'=>3999]
];

$result = '';
$style = " style='border: 1px solid black; padding: 5px;'";
$result .= "<table style='border-collapse: collapse;'>
                    <tr>
                        <th".$style.">Код товара</th>
                        <th".$style.">Название</th>
                        <th".$style.">Цена</th>
                    </tr>";
foreach ($statement as $key=>$value) {
    $result .= "<tr>
                        <td".$style.">{$statement[$key]['Код товара']}</td>
                        <td".$style.">{$statement[$key]['Название']}</td>
                        <td".$style.">{$statement[$key]['Цена']} руб.</td>
                    </tr>";
}
$result .= "</table>";

echo "<div style='margin: 20px 0; font-weight: bold'>Исходный прайс</div>";
echo $result;

foreach ($statement as $key => $row) {
    $code[$key]  = $row['Код товара'];
    $name[$key]  = $row['Название'];
    $price[$key]  = $row['Цена'];
}
array_multisort($name, $price, $statement);
$result = '';
$result .= "<table style='border-collapse: collapse;'>
                    <tr>
                        <th".$style.">Код товара</th>
                        <th".$style.">Название</th>
                        <th".$style.">Цена</th>
                    </tr>";
foreach ($statement as $key=>$value) {
    $result .= "<tr>
                        <td".$style.">{$statement[$key]['Код товара']}</td>
                        <td".$style.">{$statement[$key]['Название']}</td>
                        <td".$style.">{$statement[$key]['Цена']} руб.</td>
                    </tr>";
}
$result .= "</table>";

echo "<div style='margin: 20px 0; font-weight: bold'>Отсортированный прайс</div>";
echo $result;