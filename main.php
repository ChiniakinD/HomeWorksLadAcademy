<?php
    require "service/tasks.php";
    echo vendor_code(54) . PHP_EOL; // Задача 1. Артикул
    echo convert_time(20490) . PHP_EOL; //Задача 2. Часы
    echo convert_full_name("Чинякин Кастет Павлович") . PHP_EOL; //Задача 3. ФИО
    echo check_password(19453632) . PHP_EOL; //Задача 4. Короткий пароль
    echo check_space("2133 12") . PHP_EOL; // Задача 5. Пробел
    var_dump(same_numbers_of_letters('fbd15djfi2uvu','fgvdweh21sv')) . PHP_EOL; // Задача 6. Ровно
    echo more_details('wywuevyufewrfniofnionionwiolnfasauidnqoweopsuifbdsufisbu') . PHP_EOL;// Задача 7. Подробнее
    echo shorter("Обороноспособность") . PHP_EOL; // Задача 8. Короче
    echo same_char('qwertyee','e') . PHP_EOL; //Задача 9. Коровы
    echo check_capsLock('QWERTY123','qwerty123') . PHP_EOL; // Задача 10. Caps Lock
    echo same_char_without_register('qwErtyeE','e') . PHP_EOL; // Задача 11. Регистронезависимые коровы
    echo convert_italics_font('aa bb aA cc hf', 'Aa') . PHP_EOL; // Задача 12. Курсив
    echo tag('<p>Lorem ipsum dolor.</p>') . PHP_EOL; // Задача 13. Тег
    echo remove_comments('Lorem ipsum dolor./*Lorem ipsum dolor.*/ Lorem ipsum dolor.') . PHP_EOL; // Задача 14. Без комментариев
    echo search("This is the first sentence. The second sentence contains the keyword 'keyword'. The third sentence.","keyword") . PHP_EOL; // Задача 15. Поиск