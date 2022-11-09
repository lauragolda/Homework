<?php

$surveyed = 12467;
$purchased_energy_drinks = 0.14;
$prefer_citrus_drinks = 0.64;

function purchasedEnergyDrinks(int $surveyed, float $purchasedPercent){
    $purchased = $surveyed * $purchasedPercent;
    return round($purchased);
}

function preferCitrusFlavour(int $purchased, float $preferPercent){
    $prefer = $purchased * $preferPercent;
    return round($prefer);
}

echo "Total number of people surveyed " . $surveyed . PHP_EOL;
echo "Approximately " . purchasedEnergyDrinks($surveyed, $purchased_energy_drinks)." bought at least one energy drink." . PHP_EOL;
echo preferCitrusFlavour(purchasedEnergyDrinks($surveyed, $purchased_energy_drinks), $prefer_citrus_drinks) . " of those " . purchasedEnergyDrinks($surveyed, $purchased_energy_drinks) . " prefer citrus flavour.". PHP_EOL;