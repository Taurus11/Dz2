<?php
//Функция должна принимать массив строк и выводить каждую строку в отдельном параграфе
//Дополнительно: при выводе каждую строку выводить внутри параграфа случайное число раз

  $arr = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit';

  function p_generator ($arr) {

    $arr_words = explode(' ', $arr);
    foreach ($arr_words as $arr_word) {

      $random = rand(2, 5);
      echo '<p>';
      for ($i = 1; $i < $random; $i++){
        echo "$arr_word".'<br>';
      }
      echo '</p>';
    }
  }

  p_generator($arr);

?>