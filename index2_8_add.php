<?php
//created by Elline_Romanchuk
echo "2nd lesson, additional tasks (from letter)" . '<br>';
echo "The result of 8th task:" .'<br>';
/* Вычислить массовую долю соли в 3% растворе массой 36 кг */
$w = 36;                            //common weight of saline solution
$percent = 3;                       //concentration of solution           
$salt_m = $w * $percent/100;        //salt mass fraction

echo "common weight of saline solution is $w kg" . '<br>';
echo "concentration of solution  is $percent percent" . '<br>';
echo "salt mass fraction is $salt_m kg" . '<br>';

?>
