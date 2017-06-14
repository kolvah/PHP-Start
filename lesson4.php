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
//При преобразовании в bollean, рассматриваються как FALSE:
//    само значение FALSE
//    integer 0
//    float 0.0
//    пустая строка и строка "0"
//    массив без элементов
//    особый тип NULL
//Все остальные значения рассматриваються как TRUE.
echo '<pre>';
    $array = array(13,56,45);
    if ($array)
    {
        echo 'Массив с элементами';
    }else{
       echo 'Пустой массив';
    };
echo '</pre>';
//Конструкция выбора switch-case | Оператор выбора
 $day =10;

 //if ($day == 1){
 //    echo 'Понедельник';
 //}elseif ($day ==2){
 //    echo 'Вторник';
 //}elseif ($day ==3){
 //    echo 'Среда';
 //}elseif ($day ==4){
 //    echo 'Четверг';
 //}elseif ($day ==5){
 //    echo 'Пятница';
 //}elseif ($day ==6){
 //    echo 'Суббота';
 //}elseif ($day ==7){
 //    echo 'Воскресенье';
 //}else{
 //    echo 'Неправильный день';
 //}
echo '<pre>';
switch ($day){
    case 1: echo 'Понедельник'; echo $day; break;
    case 2: echo 'Вторник'; echo $day; break;
    case 3: echo 'Среда'; echo $day; break;
    case 4: echo 'Четверг'; echo $day; break;
    case 5: echo 'Пятница'; echo $day; break;
    case 6: echo 'Суббота'; echo $day; break;
    case 7: echo 'Воскресенье'; echo $day; break;
    default: echo 'Неправильный день';
}
echo '</pre>';
//Тернарный оператор
$status = true; //true | false
echo '<pre>';
//if ($status) {
//    echo 'Включен';
//}else{
//    echo 'Отключен';
//}
$a = ($status) ? "Включен" : "Отключен";
echo $a;
echo '</pre>';

//Логические операторы
$a = 5;
$b = 10;
echo '<pre>';
if (($a > 0) and ($b > 0)) {
    echo 'больше';
}
echo '</pre>';
//$a and $b  И  TRUE если и $a, и $b TRUE.
//$a or $b  Или  TRUE если или $a, или $b TRUE.
//$a xor $b  Исключающее лил  TRUE если $a, или $b TRUE, но не оба.
//!$a   Отрицание  TRUE если $a не TRUE.
//$a && $b  И  TRUE если и $a, и $b TRUE. //Другой приоритет выполнения
//$a || $b  Или  TRUE если и $a, и $b TRUE.   //Другой приоритет выполнения
//Приоритеты операторов | насколько тесно он связывает между собой выражения

echo '<pre>';
//помпотреть в таблице а лучше скобками () какзывать приоритет
echo '</pre>';
//Полезные функции
