<?php


$person = new stdClass();
$person->name = "Tina";
$person->surname = "Right";
$person->age = 18;


function reachedAge($person){
    if($person->age>=18){
    echo "has reached 18";
    } else {
        echo "has not reached 18";
    }
}

reachedAge($person);