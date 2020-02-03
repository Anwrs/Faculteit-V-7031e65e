<?php

echo "Van welk getal wil je de faculteit weten?" .PHP_EOL;
$x = readline("");
$i = 1;
$d = 1;

while ($i <= $x){

    $d = $i * $d;
    $i++;

}

echo "De faculteit van " . $x . " is " . $d;