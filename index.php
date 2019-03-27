<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
   content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomeWork4_6</title>
</head>
<body>
<h2>Сортировка массива</h2>
<p>Многомерный массив необходимо отсортировать. Сортировка по двум полям, при этом должна быть возможность сортировать
    в обратном порядке: `age` - по возрастанию, `gender` - по убыванию. Сам массив:<br>
    $array = [<br>
        'a1' => ['id'=>'1', 'age'=>'16', 'gender'=>'m', 'login'=>'Вася'],<br>
        'a2' => ['id'=>'2', 'age'=>'18', 'gender'=>'m', 'login'=>'Петя'],<br>
        'a3' => ['id'=>'3', 'age'=>'20', 'gender'=>'g', 'login'=>'Катя'],<br>
        'a4' => ['id'=>'4', 'age'=>'20', 'gender'=>'m', 'login'=>'Стас'],<br>
        'a5' => ['id'=>'5', 'age'=>'12', 'gender'=>'g', 'login'=>'Маша'],<br>
        'a6' => ['id'=>'6', 'age'=>'44', 'gender'=>'g', 'login'=>'Галя'],<br>
        'a7' => ['id'=>'7', 'age'=>'45', 'gender'=>'m', 'login'=>'Макс'],<br>
        'a8' => ['id'=>'8', 'age'=>'20', 'gender'=>'m', 'login'=>'Илья'],<br>
        'a9' => ['id'=>'9', 'age'=>'20', 'gender'=>'g', 'login'=>'Даша'],<br>
    ];</p>
<?php
$array = [
    'a1' => ['id'=>'1', 'age'=>'16', 'gender'=>'m', 'login'=>'Вася'],
    'a2' => ['id'=>'2', 'age'=>'18', 'gender'=>'m', 'login'=>'Петя'],
    'a3' => ['id'=>'3', 'age'=>'20', 'gender'=>'g', 'login'=>'Катя'],
    'a4' => ['id'=>'4', 'age'=>'20', 'gender'=>'m', 'login'=>'Стас'],
    'a5' => ['id'=>'5', 'age'=>'12', 'gender'=>'g', 'login'=>'Маша'],
    'a6' => ['id'=>'6', 'age'=>'44', 'gender'=>'g', 'login'=>'Галя'],
    'a7' => ['id'=>'7', 'age'=>'45', 'gender'=>'m', 'login'=>'Макс'],
    'a8' => ['id'=>'8', 'age'=>'20', 'gender'=>'m', 'login'=>'Илья'],
    'a9' => ['id'=>'9', 'age'=>'20', 'gender'=>'g', 'login'=>'Даша'],
];

//Полуяаем массив с значеями столбца(ключа) age
$arAge = array_column($array, "age");

//Полуяаем массив с значеями столбца(ключа) gender
$arGender = array_column($array, "gender");

if (array_multisort($arAge,SORT_NUMERIC,SORT_ASC, $arGender, SORT_STRING, SORT_DESC, $array)) {
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

?>
</body>
</html>
