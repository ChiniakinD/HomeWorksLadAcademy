<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Главная страница</title>
</head>
<body>
<h2>Главная страница</h2>
<p>Добрый день, <?php echo $_SESSION["login"]; ?></p>
<form method="post" >
	<input type="submit" name="logout" value="Выйти">
</form>
</body>
</html>