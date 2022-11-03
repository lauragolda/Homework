<?php



function objectFalling($a, $t, $v, $x){
    $result = 0.5*$a*($t*$t)+$t*$v+$x;
    echo "Result is {$result}m.";
}

objectFalling(-9.81, 10, 0, 0);