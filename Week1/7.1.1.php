<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 12-2-2018
 * Time: 21:12
 */
    echo "<br>opdracht 1: ";

    function bmiCalc($gewicht1, $lengte1)
    {
        $bmi = $gewicht1 / ($lengte1 * $lengte1);

        if ($bmi < 18) {
            echo "Ondergewicht";
        } elseif ($bmi < 25) {
            echo "Normaal gewicht";
        } elseif ($bmi < 30) {
            echo "Overgewicht";
        } elseif ($bmi < 40) {
            echo "Ernstig overgewicht";
        }
    }
    bmiCalc(90, 1.80);

    echo "<br>opdracht 2: ";

    function lengteCalc($gewicht2, $bmi2)
    {
        $nieuwgetal = $gewicht2 / $bmi2;
        $opdracht2 = $nieuwgetal / 2;

        echo round($opdracht2, 2) . " meter";
    }
    lengteCalc(60,18);

    echo "<br>opdracht 3: ";

    function kiloCalc2($lengte3, $bmi3)
    {
        $nieuwelengte3 = $lengte3 / 100 * 2;

        $opdracht3 = $bmi3 * $nieuwelengte3;

        echo round($opdracht3, 1) . "kg";
    }
    kiloCalc2(200,35);



    echo "<br>opdracht 4: ";

    function bmiCalc2($gewicht4, $lengte4)
    {
        $ding = $lengte4 * 2;

        $opdracht4 = $gewicht4 / $ding;

        echo round($opdracht4, 1) . " bmi";
    }
    bmiCalc2(200, 35)


?>