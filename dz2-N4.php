<?php
  //������� ������ ��������� 2 ����� �����, ����� ������������ ������� ���������
  //�������� �� �������� ����������. � ��������� ������� �������� ������
  //��������������: �������� �������, ������� �������� ������ � 2 ���������� �����������
  function num_generate () {
    global $first;
    global $second;
    $first = rand(2, 10);
    $second = rand(2, 10);
  }
  num_generate();

  function table ($first, $second) {
    echo "<table>";

    for($i = 1; $i < $first; $i++) {
      echo'<tr>';

      for($j = 1; $j < $second; $j++) {
          echo '<td>' . ($i * $j) . '</td>';
        }
      }
      echo'</tr>';
  }
  table($first, $second);

?>