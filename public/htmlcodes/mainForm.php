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
        body {
            background-color: #ffffff;
            color: #000000;
        }

        body.dark {
                background-color: #333333;
                color: #ffffff;
            }
            
            
    </style>
</head>
<body class = '<?=$_COOKIE['theme']?>'>
<h2>Главная страница</h2>
<p>Добрый день, <?php
        use sessionManager\SessionManager;
		$session = SessionManager::getInstance();
		var_dump($session->get('login'));?></p>
<h3> Выберите тему: </h3>
<form action="../style/set_theme.php" method="post">
    <label>
        <input type="radio" name="theme" value="light" required> Светлая тема
    </label>
    <label>
        <input type="radio" name="theme" value="dark" required> Темная тема
    </label><br><br>
    <input type="submit" name="submit_theme" value="Выбрать тему">
</form>
<br>
<form method="post">
    <input type="submit" name="logout" value="Выйти">
</form>
</body>
</html>
