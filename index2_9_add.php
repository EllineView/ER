<?php
//created by Elline_Romanchuk
echo "2nd lesson, additional tasks (from letter)" . '<br>';
echo "The result of 8th task:" .'<br>';
/* � ������ 23% ������ 17% ����� � 60% ���� . ����� ����� 571 �� . ����� 
 * �������� ���� ������� ���������� */
$w = 571;                            //common weight
$iron_p = 23;                         //iron percent
$tin_p = 17;                         //tin percent
$copper_p = 60;                         //copper percent

$iron_m = $w * $iron_p/100;
$tin_m = $w * $tin_p/100;
$copper_m = $w * $copper_p/100;
echo "common weight is $w kg" . '<br>';
echo "weight of iron ($iron_p %) is $iron_m kg" . '<br>';
echo "weight of tin ($tin_p %) is $tin_m kg" . '<br>';
echo "weight of copper ($copper_p %) is $copper_m kg" . '<br>';

?>
