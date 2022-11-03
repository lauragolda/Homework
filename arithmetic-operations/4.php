<?php

$number = 10;
$factorial = 1;

for($i = $number; $i >=1; $i--){
    $factorial = $factorial * $i;
}
echo "Factorial of {$number} is {$factorial}";
echo PHP_EOL;