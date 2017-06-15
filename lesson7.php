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

$format = 'По данным статистики %.2f из %d опрошенных ... в городе %s ';
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



//implode()



//Математические функции
//Работа с массивами
//Дата и время
//Языковые конструкции
//подключение файлов