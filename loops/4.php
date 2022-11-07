<?php

$number = (int)readline("Enter an integer: ");
for ($i=1; $i<=$number; $i++){
    if($i%3 === 0 && $i%5 === 0){
        echo str_replace($i, "FizzBuzz", $i). " ";
    } else if ($i%3 === 0){
        echo str_replace($i, "Fizz", $i). " ";
    } else if($i%5 === 0){
        echo str_replace($i, "Buzz", $i). " ";
    } else {
        echo $i . " ";
    }
}