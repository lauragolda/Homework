<?php

$person = new stdClass();
$person-> name = "Ivars";
$person->money = 200;
$person->licenses = ["A", "B", "C"];


function createWeapon($name,$license,$price){
$pistol = new stdClass();
$pistol-> name = $name;
$pistol->license = $license;
$pistol->price = $price;
return $pistol;
}

$weapons = [
    createWeapon("Pistol", "A", 100),
    createWeapon("Knife", "B", 250),
    createWeapon("AK47", "C", 50),
];
$licensesText = implode(",",$person->licenses);
echo "Welcome, {$persons->name}({$person->money})$ Licenses:[{$licensesText}]";
echo PHP_EOL;
echo PHP_EOL;
foreach ($weapons as $key => $weapon){
    echo "[{$key}]{$weapon->name} ({$weapon->price}$) [{$weapon->license}]" . PHP_EOL;
}
$selection = (int) readline("Enter weapon to purchase: ");
$selectedWeapon = $weapons[$selection];
if($selectedWeapon === null){
    echo "Invalid selection";
    exit;
}

if($person->money < $selectedWeapon ->price){
    echo "Nopelnit vairak!";
    exit;
}

if(in_array(! $selectedWeapon->license, $person ->licenses)){
    echo "Invalid license";
    exit;
}

echo "Thank you for purchasing {$selectedWeapon->name}.";
echo PHP_EOL;