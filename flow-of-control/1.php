<?php

echo "Input the 1st number: ";
$num1 = readline();
echo "Input the 2nd number: ";
$num2 = readline();
echo "Input the 3rd number: ";
$num3 = readline();

if($num1 > $num2 && $num1 > $num3){
    echo "The largest number is {$num1}";
} else if ($num2 > $num1 && $num2 > $num3){
    echo "The largest number is {$num2}";
} else if ($num3 > $num1 && $num3 > $num2){
    echo "The largest number is {$num3}";
} else if ($num1 == $num2 && $num2 == $num3){
    echo "All numbers are equal";
} else{
    echo "ooops, something went wrong! :((";
}