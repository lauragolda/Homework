<?php

echo "Enter the number:";
$num = readline();

if($num > 0){
    echo "The number is positive";
} else if($num < 0){
    echo "The number is negative";
} else if($num == 0){
    echo "The number is 0";
} exit;