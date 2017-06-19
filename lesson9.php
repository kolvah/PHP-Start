<?php
//Еще раз о HTTP

//Cookie
//  Создание cookie:
//setcookie();
//setcookie("name", "Ваня");
//Пример в Index & Page php

//Хранение массивов в cookie
//serialize(); - Генерирует пригодное для храненя представление переменной
//unserialize(); Создает PHP-значение из хранимого представления

$arr = ['name' => 'Виктор', 'surname' => 'Зубарев', 'city' => 'Донецк'];

$result = serialize($arr);
setcookie('arr', $result);
var_dump($result);

//Ссесии