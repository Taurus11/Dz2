<?php

  //‘ункци€ принимает 1 строковый параметр и возвращает true, если строка €вл€етс€ полиндромом
  //иначе false
  //ƒополнительно: поиск всех полиндромов в строке начина€ с трех символов

  $str = 'asdfggfdsa';

  function strvali($str) {
    $str_len = strlen($str) - 1;

    $i = $str_len;
    while ($i >= 0) {
      $new_str[] = $str[$i];
      $i--;
    }
    $result = implode('', $new_str);
    if ($str === $result) {
      return true;
    } else {
      return false;
    }
  }

  if(strvali($str)){
    echo 'good';
  }

?>