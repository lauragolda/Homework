<?php

$input= readline("Welcome to Piglet! Roll the dice? ");
 while($input === "yes"){
     $points = rand(1, 6);
     $score = 0;
     if($points === 1){
         echo "You rolled a 1.You got 0 points.";
         exit;
     }
     if($points != 1){
         $rollAgain = readline("You rolled a {$points}.Roll again? ");
         $score += $points;
     }
     if($rollAgain === "no"){
         echo "You got {$score} points.";
         exit;
     }
 }
