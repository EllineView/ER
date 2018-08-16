<?php
//created by Elline_Romanchuk
//2nd lesson
    echo "The result of 1st task:" .'<br>';
$name = 'Elline';
$age = 100;
echo 'My name is ' . $name . '<br>';
echo "I'm $age years old.". '<br>';
unset ($name);
echo "„то там в переменной name:" . $name . '<br>';
    echo '<br>' . "The result of 2nd task:" .'<br>';
$sec = 1;
$hour = $sec*60;
$day = $hour*24;
$week = $day*7;
echo "One hour = 60 min: $hour min" .'<br>';
echo "One day = 60*24 min: $day min" .'<br>';
echo "One week = 60*24*7 min: $week min" .'<br>';
    echo '<br>' . "The result of 3d task:" .'<br>';
$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;
echo "The result is: $result" . '<br>';
    echo '<br>' . "The result of 4th task:" .'<br>';
$sec = 15;$min = 48;$hour = 23;
echo 'hour:min:sec : ' . $hour . ':' .$min.':'.$sec. '<br>';
    echo '<br>' . "The result of 5th task:" .'<br>';
$n = 150;$t = 3;$v = $n /$t;
echo "To arrive city ($n km) in $t hours the velocity might be $v km/h." .'<br>';
    echo '<br>' . "The result of 6th task:" .'<br>';
$int = 125;
$str = "This is integer number";
$str1 = "in memory.";
echo "$int - $str" .'<br>';
echo "$str : $int" .'<br>';
echo "$str $str1" . '<br>';
$a = 3.14;$b = 5;$c = 2.583;
echo $a + $b .'<br>';
echo $c + $a .'<br>';
    echo '<br>' . "The result of 7th task:" .'<br>';
$kurs = 25.78;
$hrn = 25000;
$doll = round($hrn / $kurs,2);
echo "$hrn грн при курсе $kurs - это будет $doll долларов" .'<br>';



/*echo 'WWW - одна из служб интернета, всемирна€ сеть, WEB-паутина' . '<br>';
        echo 'ƒомен (ƒоменное им€) Ч это адрес созданного сайта или '
        . 'определенна€ зона, котора€ имеет свое им€, не похожее ни на '
                . 'одно другое в системе доменных имен. '. '<br>';
        echo '—ервер - любой отдельно вз€тый компьютер в »нтерненте (локальной '
                . 'сети), позвол€ющий себ€ использовать как: "посредника" при '
                . 'передаче данных и обработке запросов, хранилище информации.'. '<br>';
        echo '’остинг (англ. hosting) Ч услуга по предоставлению ресурсов дл€ '
        . 'размещени€ информации на сервере, посто€нно наход€щемс€ в сети ' . '<br>';*/
	//print('Hello, Ella!') . '<br>';
        //var_dump('Hallo, Elline!!!'). '<br>';
        //var_dump('This is my 1st project'). '<br>';

?>
