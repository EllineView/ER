<?php
//created by Elline_Romanchuk
echo "2nd lesson, additional tasks (from letter)" . '<br>';
echo "The result of 1st task:" .'<br>';
/*Вычислить периметр и площадь прямоугольника если вторая сторона в 4 раза больше первой (первую сторону придумать самому)*/
$side1 = 25;
$side2 = $side1*4;
$per = ($side1 + $side2)*2;
$sq  = $side1 * $side2;
echo "The perimetr of of a rectangle ($side1+$side2)*2 is  : " .$per . '<br>';
echo "The square of of a rectangle ($side1*$side2) is  : " .$sq . '<br>';
?>
