<?php

$fruits = [
    ["Bananas" => 10],
    ["Mangoes" => 25],
    ["Kiwi" => 15],
    ["Grapes" => 10],
    ["Limes" => 50],
];


function validateWeigh ($fruits) {
    $shippingCosts = ['1 Euros','2 Euros'];
    $weight = 10;
    foreach ($fruits as $key => $value){
        foreach ($value as $name => $item){
            if ($item > $weight) {
                echo "This $name shipping will cost you ${shippingCosts[1]}" ;
                echo PHP_EOL;
            }
            else if ($item < $weight)
            {
                echo "This $name shipping will cost you ${shippingCosts[0]}" ;
                echo PHP_EOL;
            }
        }
    }
}

validateWeigh($fruits);