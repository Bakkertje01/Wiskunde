<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 12-2-2018
 * Time: 21:12
 */

    $gewicht1 = 90;
    $lengte1 = 1.80;

    $bmi = $gewicht1 / ($lengte1 * $lengte1);

    echo "opdracht 1: ";

    if($bmi < 18) {
        echo "Ondergewicht";
    }
    elseif($bmi < 25){
        echo "Normaal gewicht";
    }
    elseif($bmi < 30){
        echo "Overgewicht";
    }
    elseif($bmi < 40){
        echo "Ernstig overgewicht";
    }

    echo "<br>opdracht 2: ";

    $gewicht2 = 60;
    $bmi2 = 18;

    $nieuwgetal = $gewicht2 / $bmi2;
    $opdracht2 = $nieuwgetal / 2;

    echo round($opdracht2, 2)." meter";

    echo "<br>opdracht 3: ";

    $lengte3 = 200;
    $bmi3 = 35;

    $nieuwelengte3 = 200 / 100 * 2;

    $opdracht3 = $bmi3 * $nieuwelengte3;

    echo round($opdracht3,1)."kg";

    echo "<br>opdracht 4: ";

    $gewicht4 = 75;
    $lengte4 = 1.80;

    $ding = $lengte4 * 2;

    $opdracht4 = $gewicht4 / $ding;

    echo round($opdracht4,1)." bmi";


?>