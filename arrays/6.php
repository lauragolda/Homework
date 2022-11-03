<?php

$words = ["codelex", "lemon", "honey", "pillow"];

$word = $words[array_rand($words)];
$letters = str_split($word);
$correctWord = str_split(str_repeat("-", strlen($word)));

echo implode("", $correctWord);
echo PHP_EOL;

$guesses = 0;
$maxGuesses = strlen($word) +3;

while($guesses < $maxGuesses && in_array("-", $correctWord)){

    $letter = readline("Enter letter: ");
    $letterPositions = array_keys($letters, $letter);

    if(count($letterPositions) > 0){
        foreach ($letterPositions as $position){
            $correctWord[$position] = $letter;
        }
    }

    echo implode("", $correctWord);
    echo PHP_EOL;

    $guesses ++;

}


echo in_array("-", $correctWord) ? "You loose." : "Nice :)";