<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 12-2-2018
 * Time: 21:12
 */

    $gewicht1 = 90;
    $lengte1 = 1.80;



    $opdracht1 = $gewicht1 / ($lengte1 * $lengte1);

    echo "opdracht 1: ";

    if($opdracht1 < 18) {
        echo "Ondergewicht";
    }
    elseif($opdracht1 < 25){
        echo "Normaal gewicht";
    }
    elseif($opdracht1 < 30){
        echo "Overgewicht";
    }
    elseif($opdracht1 < 40){
        echo "Ernstig overgewicht";
    }

    echo "<br>opdracht 2: ";




    echo "<br>opdracht 3: ";




    echo "<br>opdracht 4: ";











?>