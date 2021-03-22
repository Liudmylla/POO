<?php
require_once 'HighWay.php';

final class ResidantialWay extends HighWay
{
    public function __construct(int $nbLane=2,int $maxSpeed=50)
    {
       parent::__construct($nbLane,$maxSpeed);
    }
    public function addVehicle($vehicles)
    {
       
              array_push($currentVehicles,$vehicles);
         
    }
}
