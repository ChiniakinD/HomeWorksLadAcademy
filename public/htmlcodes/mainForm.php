<?php
//	if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['theme'])) {
//		require_once "C:\Users\Чиня\PhpstormProjects\HomeWorksLadAcademy\public\style\set_theme.php";
//    }
//?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Главная страница</title>
    <style>
        <?php
            if (isset($_COOKIE['theme']) && $_COOKIE['theme'] === 'dark') {
            echo "
            body {
                background-color: #333333;
                color: #ffffff;
            }
            ";
            } else {
            echo "
            body {
                background-color: #ffffff;
                color: #000000;
            }
            ";}
        ?>
    </style>
</head>
<body>
<h2>Главная страница</h2>
<p>Добрый день, <?php echo $_SESSION["login"]; ?></p>
<h3> Выберите тему: </h3>
<form action="../style/set_theme.php" method="post">
    <label>
        <input type="radio" name="theme" value="light" required > Светлая тема
    </label>
    <label>
        <input type="radio" name="theme" value="dark" required> Темная тема
    </label><br><br>
    <input type="submit" name="submit_theme" value="Выбрать тему">
</form><br>
<form method="post" >
	<input type="submit" name="logout" value="Выйти">
</form>
</body>
</html>
