<?php
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name = $_POST['name'];
        setcookie('name', $name, time() + 30);
    }elseif (isset($_COOKIE['name'])) {
        $name = $_COOKIE['name'];
    }else{
        $name = 'Гость';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Страница 1 index.php</title>
</head>
<body>
<?php
//echo 1; //Основной
//echo 'Привет'
?>
<h1>Страница 1 index.php</h1>
<a href="page.php">Страница 2 page.php</a>
<br><br>
<p>Привет, <?php echo $name; ?></p>
<form method="post">
    <input type="text" name="name"/>
    <input type="submit"/>
</form>
</body>
</html>