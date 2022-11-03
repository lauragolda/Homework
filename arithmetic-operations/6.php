<?php


for($i = 1; $i<=110; $i++){
   if ($i%3 ==0 && $i%7 == 0) {
        echo str_replace($i, "CozaWoza", $i);
    } else if ($i%3 === 0 && $i%5 === 0){
       echo str_replace($i, "CozaLoza", $i);
   } else if($i%3 === 0){
       echo str_replace($i, "Coza", $i);
    } else if($i%5 === 0){
       echo str_replace($i, "Loza", $i);
    } else if ($i%7 === 0){
        echo str_replace($i, "Woza", $i);
    } else {
        echo $i;
    }
    echo PHP_EOL;
}