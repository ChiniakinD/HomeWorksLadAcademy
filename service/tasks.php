<?php

    // Задача 1. Четное
    function odd($number): int
    {
        return !($number % 2);
    }

    // Задача 2. Ход ладьи
    function rook($position1, $position2): bool
    {
        if (iconv_strlen($position1) != 2 || iconv_strlen($position2) != 2) {
            throw new RuntimeException("incorrect value of letters");
        }
        $array1 = str_split($position1);
        $x1 = strtoupper($array1[0]);
        $y1 = $array1[1];

        $array2 = str_split($position2);
        $x2 = strtoupper($array2[0]);
        $y2 = $array2[1];

        return $x1 === $x2 || $y1 === $y2;
    }

    // Задача 3. Ход короля
    function king($position1, $position2): bool
    {
        if (iconv_strlen($position1) != 2 || iconv_strlen($position2) != 2) {
            throw new RuntimeException("incorrect value of letters");
        }

        $array1 = str_split($position1);
        $x1 = ord(strtoupper($array1[0]));
        $y1 = $array1[1];

        $array2 = str_split($position2);
        $x2 = ord(strtoupper($array2[0]));
        $y2 = $array2[1];

        return (abs($x2 - $x1) < 2 && (abs($y1 - $y2) < 2)) && (abs($x2 - $x1) + (abs($y1 - $y2))) <= 2;
    }

    // Задача 4. Гость
    function guest($guest): void
    {
        if ($guest) {
            echo "Пожалуйста авторизуйтесь" . PHP_EOL;
        }
    }

    // Задача 5. Модуль
    function module($number): int
    {
        if ($number < 0) {
            $number = $number * (-1);
        }
        return $number;
    }

    // Задача 6. Кто больше
    function find_max($num1, $num2): int
    {
        if ($num1 > $num2) {
            return $num1;
        }
        return $num2;
    }

    // Задача 7. Черное и белое
    function colour_of_chess_cell($cell): string
    {
        if (iconv_strlen($cell) != 2) {
            throw new RuntimeException("not correct value");
        }

        $array = str_split($cell);
        $x = strtoupper($array[0]);
        $y = $array[1];
        return (ord($x) + $y) % 2 === 0 ? "black" : "white";
    }

    // Задача 8. Все четные
    function all_numbers_are_even($a, $b, $c): bool
    {
        return $a % 2 === 0 && $b % 2 === 0 && $c % 2 === 0;
    }

    // Задача 9. Есть ли четные
    function is_there_even_number($a, $b, $c): bool
    {
        return $a % 2 === 0 || $b % 2 === 0 || $c % 2 === 0;
    }

    // Задача 10. Выходной
    function is_weekend($day): bool
    {
        return $day == 5 || $day === 6;
    }

    // Задача 11. Треугольник
    function is_triangle_exist($a, $b, $c): bool
    {
        return ($a + $b) > $c && ($b + $c) > $a && ($c + $a) > $b;
    }

    // Задача 12. Високосный год
    function is_leap_year($year): string
    {
        return ($year % 4 === 0 && $year % 100 != 0) || $year % 400 === 0 ? 'Yes' : 'No';
    }

    // Задача 13. Знак
    function sign($number): int
    {
        return $number > 0 ? 1 : ($number < 0 ? -1 : 0);
    }

    // Задача 14. Длинная соломинка
    function long_straw($a, $b, $c): int
    {
        return $a > $b && $a > $c ? $a : ($b > $a && $b > $c ? $b : $c);
    }

    // Задача 15. Сегодня холодно
    function today_is_cold($t): string
    {
        if ($t < -30) {
            return 'Оставайтесь дома!';
        } elseif ($t < -10) {
            return 'Сегодня холодно!';
        } elseif ($t < 5) {
            return 'Не холодно!';
        } elseif ($t < 15) {
            return 'Тепло!';
        } elseif ($t < 25) {
            return 'Очень тепло!';
        } elseif ($t < 35) {
            return 'Жарко!';
        } else {
            return 'Пекло';
        }
    }

    // Задача 17. Шоколадка
    function chocolate($height, $width, $pieces): bool
    {
        return $height === $pieces || $width === $pieces;
    }

    // Задача 18. Выходной2
    function weekend2($day, $order): int
    {
        if (($day + $order) % 7 == 5 || ($day + $order) % 7 == 6) {
            $day = 0;
        }
        return $day;
    }










