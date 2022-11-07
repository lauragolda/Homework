<?php

$desiredSum = (int)readline("Enter your desired sum: ");

while(true){
    $number1 = rand(1,6);
    $number2 = rand(1,6);
    $sum = $number1 + $number2;
    echo "{$number1} + {$number2} = {$sum}";
    echo PHP_EOL;
    if($sum == $desiredSum){
        exit;
    }
}