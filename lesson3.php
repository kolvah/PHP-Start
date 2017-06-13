<?php
//Типы данных - описание, определяющее свойства и особенности работы с данными
скалярные:
boolean; //истиность значения
{
    true & false;
}
integer; //целые числа Z = {.., -2, -1, 0, 1, 2, ..}
{
    $a =10;
    $a =-100;
}
float; //с плавающей точкой
{
    $a =0.5;
    $a =-0.525;
}
string; // строка - набор символов
{
    $string1 ='1) это пример строки';
    $string2 ="2) это тоже пример строки";
echo 'Номер $string1';
echo "\"Номер\" $string2"; //анализирует и подставляет значение переменных
                          // экранирующий символ \"
$a = 80;
$b = 90;
echo "В {$a}x и {$b}x годах";
}
//оператор склеивания
$firstName = 'Влад';
$lastName = 'Бабин';

$fullName = $firstName.' '.$lastName;
echo $fullName;

//омбинированые операторы сложения
$a=5;
$a=$a+5;

$a+=5; //пример: +=, -=, *=, /=, %=, .=
Смешанные:
array();//массив - набор данных. Каждый элемент массива имеет ключ - свой идентификатор в массиве.
$arr =array('Коля','Витя', 'Петя');//Три элемента строкового типа. Нумерация от 0 до ..
$arr =array('3'=>'Коля','8'=>'Витя','32'=>'Петя');//Заданные с ключами // простой массив

print($arr[3]);

//ассоциативный массив
$arr =array('name'=>'Виктор', 'age'=>24, 'gender'=>'male');
print($arr['age']);

//содержимое массива // функции print и echo работают только со скалярными значениями
echo '<pre>';//тег pre для красоты оформления
print_r($arr);
echo '</pre>';

echo '<pre>';
var_dump($arr);
echo '</pre>';

//Добавлять элементы
$arr[]=1;
$arr[5]=2;
//Удаление элемента
//unsert($arr[2]);
//Количество элемента
//count($arr); //$sum =

//Многомерные массивы
$array = array
(
    array('name'=>'Bob', 'age'=>20),
    array('name'=>'John', 'age'=>22),
);
echo '<pre>';
print_r($array[1]['name']);
echo '</pre>';
object;

Специальные:
resource;
null;
{
echo gettype($a);
unset($a);//проверить тип переменной
echo gettype($a);
}

//приведение типов
//Преобразование переменной одного типа в другой тип.
$a = "5 человек"; //строка
$a =(integer)$a;
echo $a;

//Возможны преобразования в такие типы:
//integer,boolean,float,string,array,object,unset(null);

//Неявное преобразование
$a = "5 человек"; //строка (string)
$b =10;//число (integer)
$c =$a+$b;//число (integer)
echo $c;