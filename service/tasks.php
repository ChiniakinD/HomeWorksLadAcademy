<?php
    // Задача 1. Артикул
    function vendor_code($number): string
    {
        return sprintf('%06d', $number);
    }

    //Задача 2. Часы
    function convert_time($seconds): string
    {
        $hours = floor($seconds / 3600);
        $minutes = ($seconds - $hours * 3600) / 60;
        $seconds1 = $seconds % 60;
        return sprintf("Прошло %d секунд с начала суток, сейчас время %02d:%02d:%02d", $seconds, $hours, $minutes, $seconds1);
    }

    // Задача 3. ФИО
    function convert_full_name($full_name): string
    {
        $full_name = explode(' ', $full_name);
        return $full_name[0] . ' ' . mb_substr($full_name[1], 0, 1) . ' ' . mb_substr($full_name[2], 0, 1);
    }

    // Задача 4. Короткий пароль
    function check_password($password): string
    {
        if (strlen($password) < 8) {
            return 'Слишком короткий пароль!';
        }
        return 'Пароль принят';
    }

    // Задача 5. Пробел
    function check_space($password): string
    {
        if (substr_count($password, ' ') != 0) {
            return sprintf('Убери пробелы из пароля');
        }
        return 'Пароль принят';
    }

    // Задача 6. Ровно
    function same_numbers_of_letters($word1, $word2): bool
    {
        $word1 = explode(' ', $word1);
        $word2 = explode(' ', $word2);
        $count1 = 0;
        $count2 = 0;
        foreach ($word1 as $symbol) {
            if (ctype_alpha($symbol)) {
                $count1++;
            }
        }
        foreach ($word2 as $symbol) {
            if (ctype_alpha($symbol)) {
                $count2++;
            }
        }
        return $count1 === $count2;
    }

    // Задача 7. Подробнее
    function more_details($text): string
    {
        if (mb_strlen($text) > 50) {
            $text = substr($text, 0, 50) . "<a href=#> Подробнее</a>";
        }
        return $text;
    }

    // Задача 8. Короче
    function shorter($word): string
    {
        if (mb_strlen($word) > 7) {
            $word = mb_substr($word, 0, 4) . '-' . mb_substr($word, -2, 2);
        }
        return $word;
    }

    // Задача 9. Коровы
    function same_char($word, $char): int
    {
        $count = 0;
        $word = mb_str_split($word);
        foreach ($word as $letter) {
            if ($letter === $char) {
                $count++;
            }
        }
        return $count;
    }

    // Задача 10. Caps Lock
    function check_capsLock($password, $true_password): string
    {
        return $password === $true_password ? "Добро пожаловать!" : (($password === strtoupper($true_password)) ? "Возможно нажата клавиша CapsLock" : "Ошибка входа");
    }

    // Задача 11. Регистронезависимые коровы
    function same_char_without_register($word, $char): int
    {
        $word = mb_str_split(strtoupper($word));
        $char = strtoupper($char);
        $count = 0;
        foreach ($word as $letter) {
            if ($letter === $char) {
                $count++;
            }
        }
        return $count;
    }

    // Задача 12. Курсив
    function convert_italics_font($text, $word): string
    {
        $text = strtoupper($text);
        $word = strtoupper($word);
        return str_ireplace($word, "<i>$word</i>", $text);
    }

    // Задача 13. Тег
    function tag($text): string
    {
        return str_replace(array('<p>', '</p>'), '', $text);
    }

    // Задача 14. Без комментариев
    function remove_comments($text): string
    {
        return str_replace(substr($text, strpos($text, '/*'), strpos($text, '*/') + 2 - strpos($text, '/*')), '', $text);
    }

    // Задача 15. Поиск
    function search($text, $word): string
    {
        $text = preg_split('/[.,;?!]/', $text);
        foreach ($text as $sentence) {
            if (stripos($sentence, $word) !== false) {
                return str_ireplace($word, "<strong>$word</strong>", $sentence);
            }
        }
        return "";
    }


