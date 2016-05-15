<?php
  //Функция должна принимать 2 праметра:
  //1) массив чисел
  //2) строку, обозначающую арифмитическое действие
  //Вывести результат
  //Дополнительно: написать все проверки, сделать 2 параметр по умолчанию,
  //сделать возможность приема массива арифмитических действий,
  // сколько действий будет столько и результатов

  $sign = "*";
  $array = array(1, 2, 3);

  function calc ($array, $sign) {

    switch ($sign) {
      case "+": $result = $array[0] + $array[1] + $array[2];
        echo "$result";
        break;
      case "-": $result = $array[0] - $array[1] - $array[2];
        echo "$result";
        break;
      case "*": $result = $array[0] * $array[1] * $array[2];
        echo "$result";
        break;
      case "/": $result = $array[0] / $array[1] / $array[2];
        echo "$result";
        break;
    }
  }

  calc($array, $sign);

?>