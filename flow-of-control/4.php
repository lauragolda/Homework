<?php

$dayNumber = readline("Enter a number from 0 to 6: ");

switch ($dayNumber){
    case $dayNumber == 0:
        echo "Monday";
        break;
    case $dayNumber == 1:
        echo "Tuesday";
        break;
    case $dayNumber == 2:
        echo "Wednesday";
        break;
    case $dayNumber ==3:
        echo "Thursday";
        break;
    case $dayNumber == 4:
        echo "Friday";
        break;
    case $dayNumber == 5:
        echo "Saturday";
        break;
    case $dayNumber == 6:
        echo "Sunday";
        break;
    default:
        echo "Invalid option";
        break;
}
