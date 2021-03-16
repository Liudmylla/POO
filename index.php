<?php
require_once 'Car.php';
require_once 'Bicycle.php';
$car = new Car('red',4,'gazole');


echo $car->start();

echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';

echo $car->forward();

echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';

echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';

echo "<br>";
echo 'Now is the turn of bicycle!';

$bike = new Bicycle();

echo $bike->forward();

echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';

echo $bike->brake();

echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';

echo $bike->brake();
