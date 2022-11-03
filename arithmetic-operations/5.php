<?php


$number = rand(1, 100);
$guess = readline("Im thinking of a number between 1-100. Try to guess it: ");
if($guess > $number){
    echo "Sorry, you are too high. I was thinking of {$number}";
    echo PHP_EOL;
} else if($guess < $number){
    echo "Sorry, you are too low. I was thinking of {$number}";
    echo PHP_EOL;
} else {
    echo "Yaaay, you guessed it!!";
    PHP_EOL;
}
