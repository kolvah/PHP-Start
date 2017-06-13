<?php
//Операторы сравнения | позволяют сравнивать между собой два значения
$a = 5;
$b = 3;
$result = $a > $b; // >< больше меньше
//echo $result;
echo '<pre>';
var_dump($result);
echo '</pre>';

$a = 5;
$b = 5;
$result = $a==$b; //Равно | True если $a равно $b после преобразования типов
//echo $result;
echo '<pre>';
var_dump($result);
echo '</pre>';

$a = 5;
$b = 3;
$result = $a===$b; //Тождественно авно | True если $a равно $b и имеет тот же тип
//echo $result;
echo '<pre>';
var_dump($result);
echo '</pre>';

$a = 5;
$b = 5;
$result = $a!=$b; //Не равно | True если $a равно $b после преобразования типов
//echo $result;
echo '<pre>';
var_dump($result);
echo '</pre>';

$a = 5;
$b = 3;
$result = $a <> $b; //Не равно | True если $a равно $b после преобразования типов
//echo $result;
echo '<pre>';
var_dump($result);
echo '</pre>';

$a = 5;
$b = 3;
$result = $a!==$b; //Тождественно не равно | True если $a равно $b после преобразования типов
//echo $result;
echo '<pre>';
var_dump($result);
echo '</pre>';

$a = 5;
$b = 3;
$result = $a >= $b; //Равно | True если $a больше или равно $b после преобразования типов
//echo $result;
echo '<pre>';
var_dump($result);
echo '</pre>';

$a = 5;
$b = 3;
$result = $a <= $b; //Равно | True если $a меньше или равно $b после преобразования типов
//echo $result;
echo '<pre>';
var_dump($result);
echo '</pre>';

//Условные операторы
//if ()
//else
//elseif
//$a = 10;
//$b = 5;
//if ($a > $b) //Равно | True если $a меньше или равно $b после преобразования типов
//    echo $a; // инструкция к if

$a = 10;
$b = 1;
if ($a > $b) //Равно | True если $a меньше или равно $b после преобразования типов
{
    echo $a;// инструкция к if
    echo gettype($a);
}
elseif ($a==$b)
{
    echo "Переменные равны";
}
else {
    echo $b;
}
//echo '<pre>';
//var_dump($result);
//echo '</pre>';

//Преобразование в boolean
//11:37
//Конструкция выбора switch-case
//Тернарный оператор
//Логические операторы
//Приоритеты операторов
//Полезные функции
