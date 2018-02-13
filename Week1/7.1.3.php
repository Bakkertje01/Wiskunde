<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 13-2-2018
 * Time: 20:02
 */
$n = 81;
print $n;
while($n!==1){($n&1) ? $n = ($n * 3) + 1 : $n /= 2;print ' '.$n;}




