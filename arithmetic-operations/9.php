<?php

$height = readline("Enter your height in cm: ");
$weight = readline("Enter your weight in kg: ");

$bmi = ($weight/$height/$height)*10000;
$bmi = round($bmi, 1);
echo "Your BMI is {$bmi}.";
echo PHP_EOL;
if($bmi >= 18.5 && $bmi <=25){
    echo "Your weight is optimal.";
} else if ($bmi < 18.5){
    echo "You are underweight.";
} else if ($bmi > 25){
    echo "You are overweight.";
}

echo PHP_EOL;