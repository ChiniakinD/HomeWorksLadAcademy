<?php
    require "service/tasks.php";
    echo odd(13) . PHP_EOL; // Задача 1. Четное
    var_dump(rook('g2', 'f2')) . PHP_EOL; // Задача 2. Ход ладьи
    var_dump(king('a2', 'f2')) . PHP_EOL; // // Задача 3. Ход короля
    guest(5) . PHP_EOL; // Задача 4. Гость
    echo module(-18) . PHP_EOL; // Задача 5. Модуль
    echo find_max(65,89) . PHP_EOL; // Задача 6. Кто больше
    echo colour_of_chess_cell("h3") . PHP_EOL; // Задача 7. Черное и белое
    var_dump(all_numbers_are_even(1121,232,4)) . PHP_EOL; // Задача 8. Все четные
    var_dump(is_there_even_number(121,3,45)) . PHP_EOL; // Задача 9. Есть ли четные
    var_dump(is_weekend(6)) . PHP_EOL; // Задача 10. Выходной
    var_dump(is_triangle_exist(3,4,5)) . PHP_EOL; // Задача 11. Треугольник
    echo is_leap_year(2004) . PHP_EOL; // Задача 12. Високосный год
    echo sign(56) . PHP_EOL; // Задача 13. Знак
    echo long_straw(6,14,7) .  PHP_EOL; // Задача 14. Длинная соломинка
    echo today_is_cold(-31) . PHP_EOL; // Задача 15. Сегодня холодно
    var_dump(chocolate(3,4,2)) . PHP_EOL; // Задача 17. Шоколадка
    echo weekend2(4,5) . PHP_EOL; // Задача 18. Выходной2