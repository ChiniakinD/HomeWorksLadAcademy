<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Регистрация</title>
</head>
<body>
<h2>Регистрация</h2>
<?php if (isset($error)) echo "<p>$error</p>"; ?>
<form method="post">
	<label for="login"> Введите логин </label><br>
	<input type="text" id="login" name="login" required></input><br>
	<label for="password"> Введите пароль </label><br>
	<input type="password" id="password" name="password" required></input><br>
	<label for="check_password"> Введите пароль ещё раз </label><br>
	<input type="password" id="check_password" name="check_password" required></input><br>
	<input type="submit" value="Создать аккаунт"><br>
    <label>Уже есть аккаунт? <a href="/index.php">Войти</a>  </label>
</form>
</body>
</html>