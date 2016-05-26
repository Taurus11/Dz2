<?php

    /*Функция должна принимать переменное число аргументов, но первым
    аргументом обязательно должна быть строка, обозначающая арифметическое
    действие, которое необходимо выполнить со всеми передаваемыми аргументами.
    Остальные аргументы целые и/или вещественные.
    Дополнительно (не обязательно): Задание взять из Задачи №2.*/

    function calc () {

        $arr = func_get_args();
        $sign = array_shift($arr);

        if(count($arr) > 1 && $sign != '') {

            $result = array_shift($arr);

            foreach ($arr as $arr_el) {
                switch ($sign) {
                    case "+": $result += $arr_el;
                        break;
                    case "-": $result -= $arr_el;
                        break;
                    case "*": $result *= $arr_el;
                        break;
                    case "/": $result /= $arr_el;
                        break;
                    case "^": $result = pow($result, $arr_el);
                        break;
                    default : $result = 'неизвестное арифметическая операция';
                }
            }
            echo "$result";
        }
        else {
            echo 'eror';
        }
    }

    echo calc('*', 1, 2, 3, 4, 5);

?>