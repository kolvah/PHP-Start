<?php

//        Встроенные возможности
//Документация PHP
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$arr2 = array_reverse($arr);
//print_r($arr2);
//$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10); //первый массив и второй одно и тоже
//Фуункции для работы с переменными
    //Часто используються:

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$emptyString = '';

//    isset() //проверяет задано ли значение переменных | Пример:

//echo 'Результат isset($emptyString)';
//var_dump(isset($emptyString));
//echo '<hr/>';

//    empty() //проверяет считаеться ли переменная пустой | Пример:

//echo 'Результат empty($emptyString)';
//var_dump(empty($emptyString));
//echo '<hr/>';

//    gettype() //возвращает тип переменной| Пример:

//echo 'Результат gettype($emptyString)';
//var_dump(gettype($emptyString));
//echo '<hr/>';

//    is_*:is_array(),is_int(),is_bool()  //Проверяет являеться ли переменная
// переданная в нее массивом| Пример:

//echo 'Результат is_array($emptyString)';
//var_dump(is_array($emptyString));
//echo '<hr/>';

//echo 'Результат is_array($arr)';
//var_dump(is_array($arr));
//echo '<hr/>';

//    get_defined_vars //Проверяет| Пример:

//echo '<pre>';
//print_r(get_defined_vars());
//echo '</pre>';

//Обработка строк
    //  форматирование строк
$city = 'Лондон';
$percent = 22 / 41 * 100;
$total = 1000;

//echo $percent;

$format = 'По данным статистики %.2f из %d опрошенных ... в городе %s '; //f-float d-data s-string
//printf($format, $percent, $total, $city );

$result = sprintf($format, $percent, $total, $city );
//print_r($result);

    //Работа со строками

$s = 'Some string';

echo 'substr ($s, 0, 4): ';
echo substr ($s, 0, 4). '<br/>';

echo 'substr ($s, 5, 6): ';
echo substr ($s, 5, 6). '<hr/>';

//strlen() // Позволяет находить длину строки
//substr()

//str_replace()

echo str_replace ('s', '', $s);
echo '<br/>';
echo str_replace ('string', '', $s);
echo '<br/>';
echo str_replace ('string', 'another', $s);
echo '<br/>';
echo str_replace (array('s', 'o'), '_', $s);
echo '<br/>';
echo str_replace (array('s', 'o'), array('1', '2'), $s).'<hr/>';

//explode()

$s1 = 'Другая строка, наверное';
$pieces = explode(',', $s1);
echo '<pre>';
print_r($pieces);
echo '</pre>';

//implode()

echo '<br/>';
echo implode('!', $pieces);
echo '<br/>';
echo implode('', $pieces).'<hr/>';


//Математические функции

$arr = [1, 2, 3, 4];
$f = 4.1287634;

echo 'max ($arr): ';
echo max ($arr).'<hr/>';

echo 'min ($arr): ';
echo min ($arr).'<hr/>';

echo 'rand (10, 15): ';
echo rand (10, 15).'<hr/>';

echo 'round ($f): ';
echo round ($f).'<hr/>';

echo 'ceil ($f): ';
echo ceil ($f).'<hr/>';

echo 'floor ($f): ';
echo floor ($f).'<hr/>';

//Работа с массивами
$arr = ['first'=>1, 'second'=>2, 'third'=>3];

var_dump(in_array(3, $arr));
echo '<hr/>';

$values = array_values($arr);
echo '<pre>';
print_r($values);
echo '</pre>';
echo '<hr/>';

$values = array_keys($arr);
echo '<pre>';
print_r($values);
echo '</pre>';
echo '<hr/>';

$group1 = ['4654' => 'Ваня', '5754' => 'Оля', '4689' => 'Саня'];
$group2 = ['4764' => 'Коля', '7891' => 'Жоля', '2648' => 'Маня'];

$commonGroup = $group1 + $group2;
print_r($commonGroup);

$arr1 = [1, 2, 3, 4, 5];
$arr2 = [4, 5, 6, 7, 8];

echo '<pre>';
print_r(array_intersect($arr1, $arr2));
echo '</pre>';

echo '<pre>';
print_r(array_diff($arr1, $arr2));
echo '</pre>';

        //Сортировка массивов
$arr1 = [21, 12, 44, 4, 5];
$arr2 = ['3' => 'Коля', '2' => 'Жоля', '1' => 'Маня'];

sort($arr1);
ksort($arr2);

echo '<pre>';
print_r($arr1);
echo '</pre>';

echo '<pre>';
print_r($arr2);
echo '</pre>';


//Дата и время
$now = getdate(); // Возвращает информацию о дате и времени на текущий момент
$hour = 1;
$minute = 22;
$second = 33;
$month = 2;
$day = 2;
$year = 1969;

echo '<pre>';
print_r($now);
echo '</pre>';

$timestamp = time(); // timestamp со времени начала эпохи Unix (1 января 1970 года) до сейчас
echo $timestamp. '<hr/>';

$t = mktime($hour, $minute, $second, $month, $day, $year);//Вернет timestamp определенной даты
echo $t. '<hr/>';
        //Форматироваение даты

echo date("Y-m-d H:i:s");
echo '<hr>';
echo date("F j, Y");

//Языковые конструкции

echo 'Тест';
return $value;

//die & exit //используються для остановки программы
//echo & print
//isset & unset
//include & include_once //позволяют подключать файлы
//require & require_once //позволяют подключать файлы
//empty
//eval //позволяет выполнить строку как php код
//list // позволяет преобразовать конструкцию массива в переменную
//return
//подключение файлов