<?php

$number = readline("Enter number: ");
if($number%2 == 0){
    echo "{$number} is even.";
    echo PHP_EOL;
    echo "bye!";
    exit;
} else if($number%2 == 1){
    echo "{$number} is odd.";
    echo PHP_EOL;
    echo "bye!";
    exit;
}
