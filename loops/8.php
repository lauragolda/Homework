<?php

$min = readline("Enter the min: ");
$max = readline("Enter the max: ");
for($i=$min;$i<=$max;$i++){
    for ($j = $i; $j <= $max; $j++) {
        echo $j;
    }
    for ($k = 0; $k < $i - $min; $k++) {
        echo($min + $k);
    }
    echo PHP_EOL;
}
