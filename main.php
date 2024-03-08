<?php
	require "tasks/tasks.php";
	printText('123', 4) . PHP_EOL; // Задача 1. Слава КПСС
	printParagraph('привет', 4); // Задача 2. Абзац
	echo half(500, 50) . PHP_EOL; // Задача 3. Половина
	$arrayOfReputation = reputation();
	echo sumOfReputation($arrayOfReputation) . PHP_EOL; // Задача 5. Весь рейтинг
	echo averageReputation($arrayOfReputation) . PHP_EOL; // Задача 6. Средняя по больнице
	checkMaxReputation($arrayOfReputation); // Задача 7. Выше крыши 2
	print_r($arrayOfReputation);
	checkNegativeUsers($arrayOfReputation); // Задача 8. Второе дно
	print_r($arrayOfReputation);
	showMoreThan50($arrayOfReputation); // Задача 9. Экватор
	usersAndStatus($arrayOfReputation); // Задача 10. Данила Мастер 2
	$arrayOfReputation2 = reputation1();;
	print_r(removeSameUsers($arrayOfReputation, $arrayOfReputation2)); // Задача 11. Выйди вон
	

