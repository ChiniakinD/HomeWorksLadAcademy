<?php
    function convert_to_fahrenheit($celsius) : void {
        echo $celsius * 1.8 + 32 . "F" . PHP_EOL;
    }

    function convert_rubles_to_kopecks($rubles, $kopecks) : void {
        if ($rubles < 0 || $kopecks < 0) {
            throw new RuntimeException("Variable are less than zero");
        }
        echo $rubles * 100 + $kopecks . PHP_EOL;
    }

    function find_the_difference_in_time($hours1, $minutes1, $seconds1,$hours2, $minutes2, $seconds2) : void {
        echo "Разница в секундах " . abs(($hours1 - $hours2) * 3600) + abs(($minutes1 - $minutes2) * 60) + abs($seconds1 - $seconds2) . PHP_EOL;
    }
    function convert_speed($km_hour) : void {
        echo $km_hour . " км/ч это " . $km_hour / 3.6 . "м/c" . PHP_EOL;
    }

    function information_about_triangle($cat1, $cat2) : void {
        echo "Площадь " . $cat1 * $cat2 . " периметр " . round($cat1 + $cat2 + ($cat1 ** 2 + $cat2 ** 2) ** 0.5, 3) .  " гипотенуза " . round(($cat1 ** 2 + $cat2 ** 2) ** 0.5, 3) . PHP_EOL;
    }
    function last_digit($number) : void {
        echo "В числе " . $number . " последняя цифра " . abs($number % 10) . PHP_EOL;
    }
    function first_digit($number) : void {
        echo "В числе " . $number . " количество десятков " . abs((int)($number / 10)) . PHP_EOL;
    }
    function tens_in_number($number) : void {
        echo "В числе " . $number . " количество десятков " . abs((int)(($number % 100) / 10)). PHP_EOL;
    }

    function kopecks($price) : void {
        if ($price < 0) {
            throw new RuntimeException("price is less than zero");
        }
        echo $price . " копеек" . " рублей " . abs((int)($price / 100)) . " копеек " . abs($price % 100) . PHP_EOL;
    }

    function purchases($quantity, $rubles, $kopecks) : void {
        echo "стоимость товара: рублей: " . $rubles * 4 + (int)($kopecks * 4 / 100) . " копеек: " . ($kopecks * 4) % 100 . PHP_EOL;
    }

    function square($length, $width, $length_of_square) {
        echo "Количество квадратов " . (int)(($length * $width) / $length_of_square**2);
    }





