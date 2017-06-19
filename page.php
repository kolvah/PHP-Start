<?php
if (isset($_COOKIE['name'])) {
    setcookie('name', '');
}
$str = $_COOKIE['arr'];
$array = unserialize($str);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Страница 2 page.php</title>
</head>
<body>
<?php
//echo 1; //Основной
//echo 'Привет'
?>
<h1>Страница 2 page.php</h1>
<a href="index.php">Страница 1 index.php</a>
<p>Привет, <?php echo $name; ?> куки удалены</p>
<?php print_r($array); ?>
</body>
</html>