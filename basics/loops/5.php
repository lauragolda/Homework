<?php

$persons =
[["name" => "Lily",
        "surname" => "Right",
        "age" => 28,
        "birthday" => 10.05,],["name" => "Tom",
    "surname" => "Black",
    "age" => 17,
    "birthday" => 18.06,]];

foreach($persons[0] as $key => $person_value){
    echo $key . " = " .  $person_value.PHP_EOL ;
}