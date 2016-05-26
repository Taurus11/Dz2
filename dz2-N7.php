<?php

  /*Функция принимает строку и возвращает true, если строка является полиндромом, false, если нет
  Дополнительно: ищет все полиндромы начиная с 3 строки*/

  $str = 'asdfggfdsa';

  function strvali($str) {
    $str_len = strlen($str) - 1;
    $new_str = '';
    $i = $str_len;
    while ($i >= 0) {
      $new_str .= $str[$i];
      $i--;
    }
    if ($str === $new_str) {
      return true;
    } else {
      return false;
    }
  }

  if(strvali($str)){
    echo 'good';
  }

?>