<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 13-2-2018
 * Time: 20:02
 */
$n = 81;
echo "n81 = ";
print $n;
while($n!==1){($n&1) ? $n = ($n * 3) + 1 : $n /= 2;print ' '.$n;};

echo "<br><br>";


$n1 = 965;
echo "n965 = ";
print $n1;
while($n1!==1){($n1&1) ? $n1 = ($n1 * 3) + 1 : $n1 /= 2;print ' '.$n1;};


echo "<br><br>";

$n2 = 451;
echo "n451 = ";
print $n2;
while($n2!==1){($n2&1) ? $n2 = ($n2 * 3) + 1 : $n2 /= 2;print ' '.$n2;};


?>





