<?php
session_start();
$answer1 = $_POST['answer1'];

$_SESSION['answer1'] = $answer1;
?>
<p>Вопрос 2:</p>
<p>10 + 2 = ?</p>

<form action="task%203.php" method="post">
    <input type="text" name="answer2" />
    <input type="submit" />
</form>