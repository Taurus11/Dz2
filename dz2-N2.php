<?php
  //������� ������ ��������� 2 ��������:
  //1) ������ �����
  //2) ������, ������������ �������������� ��������
  //������� ���������
  //�������������: �������� ��� ��������, ������� 2 �������� �� ���������,
  //������� ����������� ������ ������� �������������� ��������,
  // ������� �������� ����� ������� � �����������

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