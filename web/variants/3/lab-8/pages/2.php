<?php
echo '<h3>Задание 2</h3>';
echo '<div style="margin: 20px 0;">3. Создайте ассоциативный массив, аналогичный телефонному справочнику. Отсортируйте массив по фамилиям абонентов в алфавитном порядке.</div>';

$phone_book = [
    [
        'Фамилия'=>'Боярских',
        'Имя'=>'Анна',
        'Телефон'=>'8-926-562-25-85'
    ],
    [
        'Фамилия'=>'Синицына',
        'Имя'=>'Мария',
        'Телефон'=>'8-965-845-96-81'
    ],
    [
        'Фамилия'=>'Гайнутдинов',
        'Имя'=>'Роман',
        'Телефон'=>'8-965-321-94-75'
    ],
    [
        'Фамилия'=>'Дюкова',
        'Имя'=>'Татьяна',
        'Телефон'=>'8-968-954-32-84'
    ],
    [
        'Фамилия'=>'Ризванова',
        'Имя'=>'Венера',
        'Телефон'=>'8-953-621-84-97'
    ],
    [
        'Фамилия'=>'Мельникова',
        'Имя'=>'Екатерина',
        'Телефон'=>'8-983-921-65-47'
    ],
    [
        'Фамилия'=>'Чечулин',
        'Имя'=>'Иван',
        'Телефон'=>'8-962-631-75-77'
    ]
];

$result = '';
$style = " style='border: 1px solid black; padding: 5px;'";
$result .= "<table style='border-collapse: collapse;'>
                    <tr>
                        <th".$style.">Фамилия</th>
                        <th".$style.">Имя</th>
                        <th".$style.">Телефон</th>
                    </tr>";
foreach ($phone_book as $key=> $value) {
    $result .= "<tr>
                        <td".$style.">{$phone_book[$key]['Фамилия']}</td>
                        <td".$style.">{$phone_book[$key]['Имя']}</td>
                        <td".$style.">{$phone_book[$key]['Телефон']}</td>
                    </tr>";
}
$result .= "</table>";

echo "<div style='margin: 20px 0; font-weight: bold'>Несортированная телефонная книга</div>";
echo $result;

foreach ($phone_book as $key => $row) {
    $surname[$key]  = $row['Фамилия'];
    $name[$key]  = $row['Имя'];
    $phone[$key] = $row['Телефон'];
}
array_multisort($surname, $phone_book);
$result = '';
$result .= "<table style='border-collapse: collapse;'>
                    <tr>
                        <th".$style.">Фамилия</th>
                        <th".$style.">Имя</th>
                        <th".$style.">Телефон</th>
                    </tr>";
foreach ($phone_book as $key=> $value) {
    $result .= "<tr>
                        <td".$style.">{$phone_book[$key]['Фамилия']}</td>
                        <td".$style.">{$phone_book[$key]['Имя']}</td>
                        <td".$style.">{$phone_book[$key]['Телефон']}</td>
                    </tr>";
}
$result .= "</table>";

echo "<div style='margin: 20px 0; font-weight: bold'>Отсортированная телефонная книга</div>";
echo $result;