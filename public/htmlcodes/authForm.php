<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>
<body>
<h2> Авторизация </h2>
<form method="post">
    <label for="login"> Введите логин </label><br>
    <input type="text" id="login" name="login" required></input><br>
    <label for="password"> Введите пароль </label><br>
    <input type="password" id="password" name="password" required></input><br>
    <input type="submit" value="Войти"><br>
    <label>Если аккаунт отсутствует, пройдите <a href = "/registration.php" >Регистрацию</a></label>
</form>
</body>
</html>