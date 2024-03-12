<?php
	// Создание вспомогательного массива
	function getTerms(): array
	{
		$terms = ['Глоссарий' => 'Словарь узкоспециализированных терминов в какой-либо отрасли с толкованием',
			'Синоним' => 'В языкознаниии слово, совпадающее или близкое по значению с другим словом',];
		return $terms;
	}
	
	// Задача 1. Гость
	function guest(): void
	{
		if (isset($_GET['name'])) {
			echo 'Привет ' . htmlspecialchars($_GET['name']) . '!';
		} else {
			echo 'Привет Гость!';
		}
	}
	
	// Задача 2. Снова Глоссарий
	function getDefinitionByVar(): void
	{
		$terms = getTerms();
		if (isset($_GET['term']) && array_key_exists($_GET['term'], $terms)) {
			echo $terms[$_GET['term']];
		} else {
			echo 'Определение отсутсвует';
		}
	}
	
	// Задача 3. О нас
	function severalPage(): void
	{
		$pages = [
			'home' => [
				'title' => 'Главная',
				'content' => 'Это текст главной страницы',
			],
			'about' => [
				'title' => 'О нас',
				'content' => 'Это текст с информацией о деятельности владельцев сайта',
			],
		];
		foreach ($pages as $key => $value) {
			echo "<a href='index.php?page=$key'> {$value['title']}</a>" . PHP_EOL;
		}
		
		$page = $_GET['page'] ?? 'home';
		
		if (isset($pages[$page])) {
			$pageTitle = $pages[$page]['title'];
			$pageContent = $pages[$page]['content'];
		} else {
			$pageTitle = "Главная отсутствует";
			$pageContent = "Контент отсутствует";
		}
		
		echo "<h1>$pageTitle</h1>";
		echo "<p>$pageContent</p>";
	}
	
	// Задача 4. Опять глоссарий
	function changeWordByReference($text, $array): void
	{
		$text = explode(' ', $text);
		foreach ($text as $key => $word) {
			if (array_key_exists($word, $array)) {
				$text[$key] = str_replace($word, "<a href= 'index.php?term={$word}'> {$word} </a>", $word);
			}
		}
		echo implode(' ', $text);
		echo "<br>";
		getDefinitionByVar();
	}
	
	// Задача 5. Калькулятор
	function calculateSections($area, $power): int
	{
		$sections = $area * 100 / $power;
		return ceil($sections);
	}
	
	function formForCalculateSections(): string
	{
		return '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Калькулятор</title>
    </head>
    <body>
        <h2>Калькулятор количества секций радиатора</h2>
        <form method="POST">
            <label for="area">Площадь помещения (кв. м):</label><br>
            <input type="number" id="area" name="area" placeholder="Площадь" required><br>
            <label for="power">Мощность одной секции (Вт):</label><br>
            <input type="number" id="power" name="power" placeholder="Мощность" required><br><br>
            <input type="submit" value="Рассчитать">
        </form>
    </body>
    </html>';
	}
	
	// Задача 6. Подсветка
	function formForBacklight(): string
	{
		return '<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
        		<meta name="viewport" content="width=device-width, initial-scale=1.0">
       			<title>Выделение</title>
			</head>
			<body>
				<h2> Выделение текста </h2>
				<form method="POST">
					<label for="text"> Введи текст</label><br>
					<textarea type="text" id = "text" name = "text" rows = "4" cols ="40" required></textarea><br>
					<input type="submit" value="Запуск">
				</form>
			</body>
		</html>';
	}
	
	function highlightedRed($text, $array): void
	{
		$array = preg_split('/\s+/', $array);
		$text = preg_split('/\s+/', $text);
		
		foreach ($text as &$value) {
			if (in_array($value, $array)) {
				$value = '<span style="color: red;">' . $value . '</span>';
			}
		}
		echo implode(' ', $text);
	}
	
	// Задача 7. Авторизация
	function formForAuthorization(): string
	{
		return '<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
        		<meta name="viewport" content="width=device-width, initial-scale=1.0">
       			<title>Форма входа</title>
			</head>
			<body>
				<h2> Авторизация </h2>
				<form method="POST">
					<label for="firstname"> Введите логин </label><br>
					<input type="text" id = "firstname" name = "firstname" required></input><br>
					<label for="password"> Введите пароль </label><br>
					<input type="text" id = "password" name = "password" required></input><br><br>
					<input type="submit" value="Войти">
				</form>
			</body>
		</html>';
	}
	
	function forHeadPage($firstname): string
	{
		return '<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
        		<meta name="viewport" content="width=device-width, initial-scale=1.0">
       			<title>Главная страница</title>
			</head>
			<body>
				<h2>Добрый день' . $firstname . '</h2>
				<a href = "index.php?action=logout">
					<button type="button" value="Выйти">Выйти</button>
				</a>
			</body>
		</html>';
	}
	
	function checkAuthorization($firstname, $password, $true_firstname, $truePassword): void
	{
		session_start();
		if ($firstname == $true_firstname && $password == $truePassword) {
			$_SESSION['firstname'] = $firstname;
			$_SESSION['password'] = $password;
			header('Location: http://127.0.0.1/index.php?action=main');
			echo forHeadPage($firstname);
		} else {
			echo formForAuthorization();
			echo 'Данные для входа неверны';
		}
	}
	
	function exitFromUser()
	{
		session_abort();
		if (isset($_GET['action']) && $_GET['action'] == 'logout') {
			unset($_SESSION['firstname']);
			unset($_SESSION['password']);
			echo formForAuthorization();
		}
	}
	
	function switchPage()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			checkAuthorization($_POST['firstname'], $_POST['password'], 123, 124);
		} else {
			echo formForAuthorization();
		}
		exitFromUser();
	}
	


 