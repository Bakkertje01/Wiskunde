<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 13-2-2018
 * Time: 20:02
 */

function n($n)
{
    echo "n".$n." = ";
    echo $n;
    while ($n !== 1) {
        ($n & 1) ? $n = ($n * 3) + 1 : $n /= 2;
        print ' ' . $n;


    };
}
echo n(81) . "<br><br>";
echo n(965) . "<br><br>";
echo n(451) . "<br><br>";

echo "<br><br>";

?>





