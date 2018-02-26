<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 13-2-2018
 * Time: 20:41
 */

    echo "Wat is de opbrengst als er 40 personenautos en 5 autobussen komen?<br>";
    function moneyCalc($autos, $bussen)
                    {
                        echo "prijs van auto's €" . $autos * 3 ." prijs van bussen € " .$bussen * 5 ."</br>";
                        echo "Totaal: " . ($autos * 3 + $bussen * 5);
                    }

    moneyCalc(40,5);


    echo "<br><br>Er zijn 10 bussen en de opbrengst was 300 euro, hoeveel personenautos waren er die dag?<br>";
    function carCalc($euro ,$bussen)
                    {
                        $busCalc = $bussen * 10;
                        $rest = $euro - $busCalc;
                        $totalcar = $rest / 3;
                        echo "Aantal auto's = " . $totalcar;
                    }

    carCalc(300,10);


    echo "<br><br>Bij welke aantallen parkeerplaatsen voor personenautos en autobussen is de opbrengst maximaal? Hoe groot is die opbrengst?<br>";
    function maxMoney($totalSpaceCar,$totalSpaceBus)
                    {
                        $fullCalc = (($totalSpaceCar - 9)*3) + (( 3+ $totalSpaceBus) * 10);
                        echo "totaal aantal € " . $fullCalc;
                    }

    maxMoney(75,13);

?>