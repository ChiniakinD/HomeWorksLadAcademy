<?php
	require "service/tasks.php";
	print_r(reputation()); // Задача 1. Просто
	echo searchByKey(reputation(), 'Вася') . PHP_EOL; //Задача 2. Поиск данных
	echo glossary(reputation(), 'Kastet') . PHP_EOL; // Задача 3. Глоссарий
	$array = reputation();
	checkMaxReputation($array) . PHP_EOL; // Задача 4. Выше крыши
	echo defineReputation(reputation(), 'Вася') . PHP_EOL; // Задача 5. Данила Мастер
	$array = reputation();
	checkReputation($array, 'Kastet2'); // Задача 6. Рейтинг +1
	print_r($array);
	$array = reputation();
	deleteNegativeUsers($array, 'Петя'); // Задача 7. Бан
	print_r($array);
	echo getNameOfFileAndFolder('/путь/к/файлу/ваш_файл.txt') . PHP_EOL; // Задача 8. Файл
	print_r(getUserWithMaxReputation($array));    // Задача 9. Царь горы
	print_r($array);
	echo changeEnglishToRussia("Today is Monday and tomorrow is Tuesday.") . PHP_EOL; // Задача 10. День недели
	echo defineSeason('January') . PHP_EOL; // Задачник 11. Лето
	$cart = [13 => ['name' => 'Кеды', 'count' => 2, 'price' => 123],
		28 => ['name' => 'Самолет', 'count' => 1, 'price' => 9999999]];
	echo getPriceOfPurchase($cart, 13) . PHP_EOL; // Задача 12. Корзина

