<?php
	require_once "tasks/tasks.php";
	
	use PHPUnit\Framework\TestCase;
	
	class TaskTest extends TestCase
	{
		// Тесты для Задача 3. Половина
		public function test_half()
		{
			$this->assertEquals(4, half(1000, 100));
			$this->assertEquals(5, half(2000, 100));
		}
		
		// Тесты для Задача 5. Весь рейтинг
		public function test_sum_of_reputation()
		{
			$array = [100, 20, 50, 130, 200];
			$this->assertEquals(500, sumOfReputation($array));
			$array = [100, 20, 50, 130, -250];
			$this->assertEquals(50, sumOfReputation($array));
		}
		
		// Тесты для Задача 6. Средняя по больнице
		function test_average_reputation()
		{
			$array = [100, 20, 50, 130, 200];
			$this->assertEquals(100, averageReputation($array));
			$array = [100, 20, 50, 130, 0];
			$this->assertEquals(75, averageReputation($array));
		}
	}