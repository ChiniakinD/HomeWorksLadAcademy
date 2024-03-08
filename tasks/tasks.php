<?php
	// Вспомогательная функция для массива репутации
	function reputation(): array
	{
		return array('Вася' => 37, 'Даша' => 56, 'Kastet' => 100500, 'Петя' => -23, 'Леша' => 67, 'Кирилл' => 45, 'Мефодий' => 0, 'Леонид' => -15);
	}
	function reputation1(): array
	{
		return array('Вася1' => 37, 'Даша' => 56, 'Kastet1' => 100500, 'Петя' => -23, 'Леша1' => 67, 'Кирилл' => 45, 'Мефодий' => 0, 'Леонид' => -15);
	}
	//Задача 1. Слава КПСС
	function printText($text, $k) : void {
		
		for ($i = 0; $i < $k; $i++) {
			echo $text . ' ';
		}
	}
	//Задача 2. Абзац
	function printParagraph($text, $k) : void {
		for ($i = 1; $i <= $k; $i++) {
			print $text . ' ' . $i . PHP_EOL;
		}
	}
	// Задача 3. Половина
	function half($startSum, $limitSum) : int {
		$days = 0;
		while ($startSum > $limitSum) {
			$startSum = $startSum / 2;
			$days++;
		}
		return $days;
	}
	// Задача 4. Кто есть кто
	// Задача 5. Весь рейтинг
	function sumOfReputation($array) : int {
		$sum = 0;
		foreach ($array as $reputation) {
			$sum = $sum + $reputation;
		}
		return $sum;
	}
	
	// задача 6. Средняя по больнице
	function averageReputation($array) : float {
		$average  = 0;
		$amount = count($array);
		foreach ($array as $reputation) {
			if ($reputation != 0) {
				$average += $reputation;
			} else {
				$amount--;
			}
		}
		if ($amount == 0) {
			return 0;
		}
		return $average / $amount;
	}
	// Задача 7. Выше крыши 2
	function checkMaxReputation(&$array) : void {
		foreach ($array as &$reputation) {
			if ($reputation >= 100) {
				$reputation = 100;
			}
		}
	}
	// Задача 8. Второе дно
	function checkNegativeUsers(&$array) : void {
		foreach ($array as &$reputation) {
			if ($reputation < 0) {
				$reputation = 0;
			}
		}
	}
	// Задача 9. Экватор
	function showMoreThan50($array) : void {
		foreach ($array as $key => $reputation) {
			if ($reputation > 50) {
				echo $key. ' ' . $reputation . PHP_EOL;
			}
		}
	}
	// Задача 10. Данила Мастер 2
	function usersAndStatus($array) : void {
		foreach ($array as $key => $reputation) {
			if ($reputation <= 30) {
				$status = 'Новичок';
			} elseif ($reputation <= 60) {
				$status = 'Мастер';
			} else {
				$status = 'Грандмастер';
			}
			echo $key . ' ' . $reputation . ' ' . $status . PHP_EOL;
		}
	}
	// Задача 11. Выйди вон
	function removeSameUsers($array1, $array2) : array {
		return array_diff_key($array1,$array2);
	}
	