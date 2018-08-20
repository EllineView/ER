<?php
//created by Elline_Romanchuk
echo "2nd lesson, additional tasks (from letter)" . '<br>';
echo "The result of 7th task:" .'<br>';
/* Возьмите свой вес , посчитайте с какой силой вас притягивает земля(вес 
 * умножить на 10 ньютон на килограмм) и с какой силой вам надо оттолкнуться 
 * от земли чтобы подпрыгнуть(сила притяжения земли + X ньютон 
 * (взять любое число больше 300)) */
$my_w = 75;                 //my weight
$ea = $my_w * 10;           //earth attraction
$rep = $ea + 456;           //my repulsion for jump
echo "my weight is $my_w kg" . '<br>';
echo "earth attraction is $ea newton" . '<br>';
echo "my repulsion for jump is $rep newton" . '<br>';

?>
