<?php
	// Задача 1. Просто
	function reputation(): array
	{
		return array('Вася' => 37, 'Даша' => 56, 'Kastet' => 100500, 'Петя' => -23, 'Леша' => 67, 'Кирилл' => 45);
	}
	
	// Задача 2. Поиск данных
	function searchByKey($array, $key): string
	{
		foreach ($array as $key_of_element => $element) {
			if ($key_of_element === $key) {
				return 'Такой ключ есть';
			}
		}
		return 'Ключ отсутсвует';
	}
	
	// Задача 3. Глоссарий
	function glossary($array, $key): string
	{
		foreach ($array as $key_of_element => $element) {
			if ($key_of_element === $key) {
				return $key_of_element . ' ' . $element;
			}
		}
		return 'Данные не найдены';
	}
	
	// Задача 4. Выше крыши
	function checkMaxReputation(&$array): void
	{
		foreach ($array as &$element) {
			if ($element > 100) {
				$element = 100;
			}
		}
		print_r($array);
	}
	
	// Задача 5. Данила Мастер
	function defineReputation($array, $key): string
	{
		foreach ($array as $key_of_element => $element) {
			if ($key_of_element === $key) {
				$user = $element;
			}
		}
		if ($user < 31) {
			return 'Новичок';
		} elseif ($user < 61) {
			return 'Мастер';
		} else {
			return 'Грандмастер';
		}
	}
	
	// Задача 6. Рейтинг +1
	function checkReputation(&$array, $key): void
	{
		if (isset($array[$key])) {
			$array[$key]++;
		} else {
			$array[$key] = 0;
		}
	}
	
	// Задача 7. Бан
	function deleteNegativeUsers(&$array, $key): void
	{
		if ($array[$key] < 0) {
			unset($array[$key]);
		}
	}
	
	// Задача 8. Файл
	function getNameOfFileAndFolder($path): string
	{
		$arr = explode('/', $path);
		$file_name = end($arr);
		$folder_name = $arr[count($arr) - 2];
		return $folder_name . ' ' . $file_name;
	}
	
	// Задача 9. Царь горы
	function getUserWithMaxReputation($array): array
	{
		arsort($array);
		return array_slice($array, 0, 3);
	}
	
	// Задача 10. День недели
	function changeEnglishToRussia($text): string
	{
		$dict = [
			'Monday' => 'Понедельник',
			'Tuesday' => 'Вторник',
			'Wednesday' => 'Среда',
			'Thursday' => 'Четверг',
			'Friday' => 'Пятница',
			'Saturday' => 'Суббота',
			'Sunday' => 'Воскресенье'
		];
		return str_replace(array_keys($dict), $dict, $text);
	}
	
	// Задачник 11. Лето
	function defineSeason($month): string
	{
		$array_months = [
			'January' => 'Winter',
			'February' => 'Winter',
			'March' => 'Spring',
			'April' => 'Spring',
			'May' => 'Spring',
			'June' => 'Summer',
			'July' => 'Summer',
			'August' => 'Summer',
			'September' => 'Autumn',
			'October' => 'Autumn',
			'November' => 'Autumn',
			'December' => 'Winter'
		];
		return $array_months[$month];
	}
	
	// Задача 12. Корзина
	function getPriceOfPurchase($basket, $id): int
	{
		if (isset($basket[$id])) {
			return $basket[$id]['count'] * $basket[$id]['price'];
		}
		return 0;
	}
 
 
 
 
