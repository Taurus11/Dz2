<?php

  //������� ��������� 1 ��������� �������� � ���������� true, ���� ������ �������� �����������
  //����� false
  //�������������: ����� ���� ����������� � ������ ������� � ���� ��������

  $str = 'asdfggfdsa';

  function strvali($str) {
    $str_len = strlen($str) - 1;

    $i = $str_len;
    while ($i >= 0) {
      $new_str[] = $str[$i];
      $i--;
    }

    if ($str === $new_str) {
      print_r($new_str);
    }
  }

  strvali($str);
?>