<?php
require_once 'HighWay.php';
require_once 'Car.php';
require_once 'Truck.php';

final class MotorWay extends HighWay
{
    public function __construct(int $nbLane=4,int $maxSpeed=130)
    {
       parent::__construct($nbLane,$maxSpeed);
    }
     public function addVehicle(Vehicle $vehicles)
     {
         if ($vehicles instanceof Car || $vehicles instanceof Truck || $vehicles instanceof Bus)
         { 
              array_push($this->currentVehicles,$vehicles);
              return $this->currentVehicles;
            }
     }
}
