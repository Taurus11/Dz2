<?php
  //������� ������ ��������� ������ ����� � �������� ������ ������ � ��������� ���������
  //�������������: ��� ������ ������ ������ �������� ������ ��������� ��������� ����� ���

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