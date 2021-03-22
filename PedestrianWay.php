<?php
require_once 'HighWay.php';


final class PedestrialWay extends HighWay
{
    public function __construct(int $nbLane=1,int $maxSpeed=10)
    {
       parent::__construct($nbLane,$maxSpeed);
    }
    
    public function addVehicle($vehicles)
    {
        if ($vehicles instanceof Bike || $vehicles instanceof Skateboard)
         {
              array_push($currentVehicles,$vehicles);
         }
         return $currentVehicles;
    }
    
}
