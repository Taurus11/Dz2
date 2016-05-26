<?php
//Создать 3 функции, принимающие по 1 строковому параметру, выводящие на экран строку с этим параметром
//Создать 4ю, которая будет принимать целое число и строку, и в зависимости от переданного числа
//должна вызывать одну из трёх функций со строковым параметром
//Дополнительно:
  function one ($str) {
    echo ("Hello of zero function, $str");
  }

  echo('<br>');

  function two ($str) {
    echo ("Hello of first function $str");
  }

  echo('<br>');

  function three ($str) {
    echo ("Hello of second function $str");
  }

  function call ($num, $str) {
    $count = count($num);
    $numfunc = mt_rand(1, $count);

    switch ($numfunc) {
      case 1: one($str);
        break;
      case 2: two($str);
        break;
      case 3: three($str);
        break;
    }
    return $str;
  }

  call(1, 'elvis');
?>