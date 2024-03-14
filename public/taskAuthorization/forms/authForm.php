<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>
<body>
<h2> Авторизация </h2>
<?php if (isset($error)) echo "<p>$error</p>"; ?>
<form method="post">
    <label for="login"> Введите логин </label><br>
    <input type="text" id="login" name="login" required></input><br>
    <label for="password"> Введите пароль </label><br>
    <input type="password" id="password" name="password" required></input><br><br>
    <input type="submit" value="Войти">
</form>
</body>
</html>