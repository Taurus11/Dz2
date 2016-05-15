<?php
  //Функция должна принимать массив строк и выводить каждую строку в отдельном параграфе
  //Дополнительно: при выводе каждую строку выводить внутри параграфа случайное число раз

  $str_arr = array('Hello world', 'I love live', 'Be happy');

  function p_generator ($str_arr) {

    for ($i = 0; $i <= rand(0, 5); $i++){
      echo '<p>' . $str_arr[0] . '</p>';
    }

    for ($i = 0; $i <= rand(0, 5); $i++) {
      echo '<p>' . $str_arr[1] . '</p>';
    }

    for ($i = 0; $i <= rand(0, 5); $i++) {
      echo '<p>'. $str_arr[2] . '</p>';
    }
  }

  p_generator($str_arr);

?>