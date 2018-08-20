<?php
//created by Elline_Romanchuk
echo "3d lesson, additional tasks (from letter)" . '<br>';
echo "The result of 3d task:" .'<br>';
/*Даны три числа. Найдите их среднее арифметическое, умножить его на 4 и 
 * сравнить с каждым из чисел. (ответ true или false + сами числа)  */
$n1 = 0.25;
$n2 = 35.48;
$n3 = -15.587;
$average = ($n1 + $n2 + $n3)/3;
echo "Average is " . $average . '<br>';
$it = $average * 4;
echo "Result is $it" . '<br>';
if($it == $n1) echo "True, n1 =  $n1" . '<br>';
else echo "False, n1 = $n1" . '<br>';
if($it == $n2) echo "True, n2 = $n2" . '<br>';
else echo "False, n2 = $n2" . '<br>';
if($it == $n3) echo "True, n3 = $n3" . '<br>';
else echo "False, n3 = $n3" . '<br>';

?>
