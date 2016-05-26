<?php
//Функция должна принимать 2 праметра:
//1) массив чисел
//2) строку, обозначающую арифмитическое действие
//Вывести результат
//Дополнительно: написать все проверки, сделать 2 параметр по умолчанию,
//сделать возможность приема массива арифмитических действий,
// сколько действий будет столько и результатов

  $sign = "+";
  $arr = array(1, 2, 3, 4, 5);

  function calc ($arr, $sign) {

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

  calc($arr, $sign);

?>