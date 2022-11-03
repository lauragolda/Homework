<?php

$number1 = readline("Enter the first number: ");
$number2 = readline("Enter the second number: ");

if($number1 == 15 || $number2 == 15 || ($number1+$number2 == 15) || ($number1 - $number2 == 15)){
    echo "true";
    exit;
}