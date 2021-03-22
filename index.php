<?php
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'PedestrianWay.php';
require_once 'Bike.php';

$bicycle = new Bicycle('blue', 1);

echo $bicycle->forward();

var_dump($bicycle);


$car = new Car('green', 4, 'electric');

echo $car->forward();

var_dump($car);



var_dump(Car::ALLOWED_ENERGIES);

$truck = new Truck('black',2,'electric',10);



echo $truck->forward();
echo "</br>";
echo Truck::is_load($truck);
echo "</br>";
$truck->setLoading(10);
echo Truck::is_load($truck);
var_dump($truck);

