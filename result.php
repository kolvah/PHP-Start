<?php
session_start();
$answer1 = $_SESSION['answer1'];
$answer2 = $_SESSION['answer2'];
$answer3 = $_POST['answer3'];

if ( ($answer1 == 4 ) && ($answer2 == 12) && ($answer3 == 22) ) {
    echo '+';
}else{
    echo '-';
}
?>
<p>Ваш результат:</p>