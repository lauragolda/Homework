<?php
require_once "car.php";
require_once "odometer.php";
require_once "FuelGauge.php";

$car = new Car(
    new FuelGauge(50),
    new Odometer(),
);


while($car->getFuelGauge()->getAmount()>0){
    echo "We drove 1km" . PHP_EOL;

    $car->drive();
    echo "FuelGauge: {$car->getFuelGauge()->getAmount()} / Odometer: {$car->getOdometer()->getMileage()}";
    sleep(1);
}