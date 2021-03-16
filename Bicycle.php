<?php
class Bicycle
{
/**
 * @var int
 */
public $nbWheels;

/**
 * @var int
 */

public $currentSpeed;
/**
 * @var string
 */

public $color;
/**
 * @var int
 */

public $nbSeats;



public function forward()
{
    $this->currentSpeed =15;
    return "Go !";
}
public function brake(): string
{
    $sentence ="";
    while ($this->currentSpeed>0){
        $this->currentSpeed--;
        $sentence .= "Brake !!!";
    }
    $sentence .= "Bike is stopped !";
    return $sentence;
}
/**
 * @return int
 */
public function getNbWheels(): int
{
return $this->nbWheels;
}
/**
 * @return int
 */
public function getCurrentSpeed(): int
{
return $this->currentSpeed;
}
/**
 * @return string
 */
public function getColor(): string
{
return $this->color;
}
/**
 * @return int
 */
public function getNbSeats(): int
{
return $this->nbSeats;
}
/** 
* @return string
*/
public function getEnergy(): string
{
return $this->energy;
}
/**
 * @return int
 */
public function getEnergyLevel(): int
{
return $this->energylevel;
}



}






