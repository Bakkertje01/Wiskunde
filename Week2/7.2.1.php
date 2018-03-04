<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 13-2-2018
 * Time: 20:41
 */

    echo "Wat is de opbrengst als er 40 personenautos en 5 autobussen komen?<br>";
    function opbrengstCalc($autos, $bussen)
                    {
                        echo "prijs van auto's €" . $autos * 3 ." prijs van bussen € " .$bussen * 10  ."</br>";
                        echo "Totaal: " . ($autos * 3 + $bussen * 10);
                    }

    opbrengstCalc(40,5);


    echo "<br><br>Er zijn 10 bussen en de opbrengst was 300 euro, hoeveel personenautos waren er die dag?<br>";
    function personenautosCalc($euro ,$bussen)
                    {
                        $busCalc = $bussen * 10;
                        $rest = $euro - $busCalc;
                        $totalcar = $rest / 3;
                        echo "Aantal auto's = " . round($totalcar, 0 );
                    }

    personenautosCalc(300,10);


    echo "<br><br>Bij welke aantallen parkeerplaatsen voor personenautos en autobussen is de opbrengst maximaal? Hoe groot is die opbrengst?<br>";
    function maximaalCalc($totalSpaceCar,$totalSpaceBus)
                    {
                        $fullCalc = (($totalSpaceCar - 9)*3) + (( 3+ $totalSpaceBus) * 10);
                        echo "Totaal aantal = €" . $fullCalc;
                    }

    maximaalCalc(75,13);

?>
