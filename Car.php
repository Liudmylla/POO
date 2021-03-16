<?php
class Car 
{
/**
 * @var int
 */
private $nbWheels;

/**
 * @var int
 */

private $currentSpeed;
/**
 * @var string
 */

private $color;
/**
 * @var int
 */

private $nbSeats;
/**
 * @var string
 */

private $energy;
/**
 * @var int
 */

private $energylevel;

public function __construct(string $color,int $nbSeats,string $energy)
{
    $this->color = $color;
    $this->nbSeats =$nbSeats;
    $this->energy=$energy;
}
public function start()
{
    $this->currentSpeed =20;
    return "Go !";
}
public function brake(): string
{
    $sentence ="";
    while ($this->currentSpeed>0){
        $this->currentSpeed--;
        $sentence .= "Brake !!!";
    }
    $sentence .= "The car is stopped !";
    return $sentence;
}
public function forward(): string
{
    $sentence ="";
    while ($this->currentSpeed<50){
        $this->currentSpeed++;
        $sentence .= "Avance !!!";
    }
    $sentence .= "The car's vitesse is 50km !";
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






