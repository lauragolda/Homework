<?php

$sum = 0;
$lowerBound = 1;
$upperBound = 100;

for($i = $lowerBound; $i <=$upperBound; $i++){
    $sum+= $i;
}
$average = $sum/$upperBound;

echo "The sum of {$lowerBound} to {$upperBound} is {$sum}.";
echo PHP_EOL;
echo "The average is {$average}.";