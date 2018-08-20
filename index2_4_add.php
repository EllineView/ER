<?php
//created by Elline_Romanchuk
echo "2nd lesson, additional tasks (from letter)" . '<br>';
echo "The result of 4th task:" .'<br>';
/* Дано число. Увеличьте его на 30%, на 120% и сравнить среднее арифметическое 
 * результатов с первоначальным числом  (ответ true или false + сами числа) */
$n1 = 0.75;
$n2 = $n1 * 1.3;
$n3 = $n1 * 2.2;
$av = ($n2 + $n3)/2;
echo "n1 is " . $n1 . '<br>';
echo "n2 (increse n1 by 30%) is " . $n2 . '<br>';
echo "n3 (increse n1 by 120%) is " . $n3 . '<br>';
echo "Average is " . $av . '<br>';
if($av == $n1) echo "True, n1 =  $n1" . '<br>';
else echo "False, n1 = $n1" . '<br>';


?>
