<?php
//created by Elline_Romanchuk
echo "2nd lesson, additional tasks (from letter)" . '<br>';
echo "The result of 2nd task:" .'<br>';
/*���� ��� �����. ������� �������� ���������� � ���������� ����������, ������� ����������,  ���������� �� ������ �� ������� �� 10.(����� true ��� false) */
$side1 = 25;
$side2 = 35; //$side1*4;
$boo = abs($side1 - $side2) == 10;
if ($boo) echo $boo . " Numbers differ from each other by 10";
else echo "$boo Numbers differ from each other not by 10";

?>
