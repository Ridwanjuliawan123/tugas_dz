<?php
    $celcius = 30;
    $fahrenheit;
    $kelvin;
    $reamur;
    $rankine;

    $fahrenheit = (9/5) * $celcius + 32;
    $kelvin = $celcius + 273.15;
    $reamur = (4/5) * $celcius;
    $rankine = ($celcius + 273.15) * 9/5;

    echo ("<h3>konverensi suhu</h3>");
    echo ("$celcius <br>");
    echo ("$celcius = $fahrenheit fahrenheit<br>");
    echo ("$celcius = $kelvin kelvin<br>");
    echo ("$celcius = $reamur reamur<br>");
    echo ("$celcius = $rankine rankine<br>");  

?>