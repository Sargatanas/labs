<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <title>Задание 2</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th,
        td {
            padding: 5px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
<h3>
    Задание 2
</h3>
<div style='margin: 20px 0;'>
    7. Создайте массив, содержащий сведения о ваших друзьях. Отсортируйте его по возрасту друзей и выведите
    всю информацию.
</div>
<br><hr><br>

<?php
$statement = [
    ['Фамилия'=>'Михалев', 'Имя'=>'Алексей', 'Возраст' => '21 год'],
    ['Фамилия'=>'Байкузина', 'Имя'=>'Татьяна', 'Возраст' => '24 года'],
    ['Фамилия'=>'Олехов', 'Имя'=>'Алексей', 'Возраст' => '23 года'],
    ['Фамилия'=>'Постаногова', 'Имя'=>'Злата', 'Возраст' => '24 года'],
    ['Фамилия'=>'Сорокина', 'Имя'=>'Анна', 'Возраст' => '21 год'],
    ['Фамилия'=>'Тетерин', 'Имя'=>'Антон', 'Возраст' => '25 лет'],
    ['Фамилия'=>'Шадрина', 'Имя'=>'Маргарита', 'Возраст' => '22 года'],
    ['Фамилия'=>'Саблина', 'Имя'=>'Анастасия', 'Возраст' => '22 года'],
    ['Фамилия'=>'Онохова', 'Имя'=>'Мария', 'Возраст' => '26 лет'],
    ['Фамилия'=>'Афанасьева', 'Имя'=>'Ульяна', 'Возраст' => '25 лет']
];
$result = '';
$result .= "<table>
                    <tr>
                        <th>Фамилия</th>
                        <th>Имя</th>
                        <th>Возраст</th>
                    </tr>";
foreach ($statement as $key=>$value) {
    $result .= "<tr>
                        <td>{$statement[$key]['Фамилия']}</td>
                        <td>{$statement[$key]['Имя']}</td>
                        <td>{$statement[$key]['Возраст']}</td>
                    </tr>";
}
$result .= "</table>";

echo "<div style='margin: 20px 0; font-weight: bold'>Мои друзья</div>";
echo $result;

foreach ($statement as $key => $row) {
    $surname[$key]  = $row['Фамилия'];
    $name[$key]  = $row['Имя'];
    $age[$key]  = $row['Возраст'];
}
array_multisort($age, $statement);
$result = '';
$result .= "<table>
                    <tr>
                        <th>Фамилия</th>
                        <th>Имя</th>
                        <th>Возраст</th>
                    </tr>";
foreach ($statement as $key=>$value) {
    $result .= "<tr>
                        <td>{$statement[$key]['Фамилия']}</td>
                        <td>{$statement[$key]['Имя']}</td>
                        <td>{$statement[$key]['Возраст']}</td>
                    </tr>";
}
$result .= "</table>";

echo "<div style='margin: 20px 0; font-weight: bold'>Друзья по возрасту</div>";
echo $result;
?>

</body>
</html>