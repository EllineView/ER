<?php
//created by Elline_Romanchuk
echo "2nd lesson, additional tasks (from letter)" . '<br>';
echo "The result of 6th task:" .'<br>';
/* Дано трехзначное число. Найдите сумму его цифр ( с помощью отделения единиц, 
 * десятков,сотен ). Например: есть число 123, то программа должна вычислить 
 * сумму цифр 1, 2, 3, т. е. 6. */
$n1 = 456;
$n2 = $n1%10;    
$sum += $n2;
$n3 = ($n1%100 - $n2)/10;
$sum += $n3;
$n4 = ($n1%1000 - $n1%100)/100;
$sum += $n4;
//2nd 
$itog = ($n1%1000 - $n1%100)/100 + ($n1%100 - $n2)/10 + $n1%10;
echo "n1 is " . $n1 . '<br>';
echo "n2 is " . $n2 . '<br>';
echo "n3 is " . $n3 . '<br>';
echo "n4 is " . $n4 . '<br>';
echo "sum is " . $sum . '<br>';
echo "itog is " . $itog . '<br>';

?>
