<?php
require_once 'Vehicle.php';

abstract class HighWay 

{
    abstract public function addVehicle(Vehicle $vehicles);
    /**
     * @var array
     */
    protected $currentVehicles;

    /**
     * @var int
     */
    protected $nbLane;

    /**
     * @var int
     */
    protected $maxSpeed;

   
    

    public function __construct(int $nbLane,int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

   
    

    /**
     * Get the value of currentVehicles
     *
     * @return  array
     */
    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }

    /**
     * Set the value of currentVehicles
     *
     * @param  array  $currentVehicles
     *
     * @return  self
     */
    public function setCurrentVehicles(array $currentVehicles)
    {
        $this->currentVehicles = $currentVehicles;

        return $this;
    }

    /**
     * Get the value of nbLane
     *
     * @return  int
     */
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * Set the value of nbLane
     *
     * @param  int  $nbLane
     *
     * @return  self
     */
    public function setNbLane(int $nbLane)
    {
        $this->nbLane = $nbLane;

        return $this;
    }

    /**
     * Get the value of maxSpeed
     *
     * @return  int
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * Set the value of maxSpeed
     *
     * @param  int  $maxSpeed
     *
     * @return  self
     */
    public function setMaxSpeed(int $maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }
}
