<?php

$person = new stdClass();
$person->name = "Tina";
$person->surname = "Right";
$person->age = 18;


function reachedAge($person){
    while($person -> age >= 18){
        echo "The person has reached the age of 18";
        break;
    }
}

reachedAge($person);