<?php
//Функции. Описание и вызов
//Функция - это программный блок, предназначенный для многократного выполнения.

    //Объявление:
    //function myFirstFunction(){
    //    echo "<h1>Привет!</h1>";
    //}
    //
    //  Вызов:
    //myFirstFunction();

//Правила использования
//    Правила для имен - такие же как и для переменных.
//    Имя функции не зависит от регистра.
//    Функцию нельзя декларировать 2 раза. Это делаеться всего один раз.
//    Функуии не обязательно определять их до использования.
//Аргументы функции
//    Функция может принимать информацию в виде списка аргументов, который
//    являеться списком раздеенных зяпятыми выражений.

    //$total=count($array);
    //$result=explode(',','Болельщикам, конечно же, хтелось бы увидеть футбол');
    //
    //myFirstFunction($name){
    //    echo ;
    //}
    //myFirstFunction('Виктор');

//Объявление:
//function myFirstFunction($name){
//    echo "<h1>Привет, $name</h1>";
//}
////
////  Вызов:
//$name2 = 'Алексей';
//myFirstFunction($name2);//аргумент
//myFirstFunction('Виктор');//строка
//myFirstFunction();
            //пример нескольких аргументов
//function myFirstFunction($name, $username){
//    echo "<h1>Привет, $name $username</h1>";
//}
////
////  Вызов:
//myFirstFunction('Виктор', 'Зинченко');//строка
            //пример масива как аргумента функции
//function myFirstFunction($array){
//    foreach ($array as $name){
//        echo 'Hello,'.$name;
//    }
//}
////
////  Вызов:
//$array =array('Виктор', 'Коля', 'Зоя');
//myFirstFunction($array);//массив
//Значение аргументов по умолчанию
function myFirstFunction($name = 'Пользователь'){ //задаем значение по умолчанию
        echo 'Hello,'.$name;
    }
//
//  Вызов:
myFirstFunction('Виктор');
myFirstFunction();
//Область видимости переменных
//    Локальная область видимости
//        В нутри функции
//    Глобальная область видимости
//        за рамками функции
//Пример:
//echo "<hr>";
//$a = 1;
//function test ($name='Виктор'){
//    $a = 2;
//}
//
//test();
//
//echo $a;
//            Доступ к глобальным переменным в нутри функции
//  при помощи global
//  Используя следубщий массив $GLOBALS
echo "<hr>";
$name1 = 'Алексей';
$name2 = 'Михаил';
function test (){
    $name3 = 'Владимир';
    echo 'привет '.$name3. '<br/>';
    //Способ номер 1
    global $name1;
    echo 'привет '.$name1. '<br/>';
    //Способ номер 2
    echo 'привет '.$GLOBALS['name2']. '<br/>';
    $GLOBALS['name2'] = 'Саша'; // меняем значение глобальных переменных в нутри функции
}

test();
echo $name2;
//Передача аргументов по ссылке
//function test(&$beta) {
//    $beta = 5;
//}
//
//    $beta = 10;
//    test($beta); //передовать только переменные
//
//    echo $beta;

//Статические переменные | это переменная в функции, которая
// инициализируеться при первом вызове функции и не теряет своего
// значения после ее выполнения.
echo "<hr>";
function hawManyTimes() {
    static $a = 0;
    echo ++$a;
}

hawManyTimes();
hawManyTimes();
hawManyTimes();
//Возврат значений
echo "<hr>";
function perimetr($a,$b) {
    $r = (2*$a) + (2*$b);
    return $r;
}

    $a = 10;
    $b = 20;

    $p = perimetr($a, $b);
    echo $p;
//Рекурсивная функция
echo "<hr>";
 $array = array(
     'Автотехника' => array( //1
         'Вело' => array( //2
             'Велосипеды' => array( //3
                 '(товар) Extreme' =>10, //4
                 '(товар) Author' =>4, //4
             ),
             'Самокаты' => 12, //3
         ),
        'Авто' => array( //2
            'Opel' => array( //3
                '(товар) Vivaro' => 5, //4
            ),
            '(товар) Honda' => 10, //3
            '(товар) Audi' => 11, //3
),
        '(товар) Аксесуары' => 7, //2
     ),

    'Фототехника' => array( //1
        '(товар) фотокамеры' => 6, //2
        '(товар) видеокамеры' => 3, //2
),

    '(товар) Другое' => 3, //1
 );

// $s = 0;
//
//foreach ($array as $level1) {
//    if (is_array($level1)) {
//        foreach ($level1 as $level2) {
//            if (is_array($level2)){
//                foreach ($level2 as $level3) {
//                    if (is_array($level3)) {
//                        foreach ($level3 as $level4) {
//                            if (is_array($level4)) {
//                                echo '<pre>';
//                                print_r($level4);
//                                echo '</pre>';
//                            } else {
//                                $s += $level4;
//                            }
//                        }
//                    } else {
//                        $s += $level3;
//                    }
//                }
//                }else{
//                $s += $level2;
//            }
//        }
//    } else {
//        $s += $level1;
//    }
//}
//
//echo '<hr>' . $s;

//echo '<pre/>';
// var_dump(is_array($array));

function sum($array, $level = 0) { // Лучше разобраться как работает эта функция !!!

    static $count;
    static $items;

//    var_dump($level);
    if (is_array($array)) {
        $level++;
        foreach ($array as $element){
            sum($element, $level);
        }
    } else {
        $count++;
        $items +=$array;

    }
    return array('count' =>$count, 'items' =>$items);
}

$result = sum($array);
print_r($result);