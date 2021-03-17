<?php
require_once 'Vehicle.php';


class Truck extends Vehicle {


    const ALLOWED_ENERGIES = [

        'fuel',

        'electric',

    ];
    /**

     * @var string

     */

    private $energy;


    /**

     * @var int

     */

    private $capacityStorage;

    /**

     * @var int

     */

    private $loading = 0;





    public function __construct(string $color, int $nbSeats, string $energy,int $capacityStorage)

{

    parent::__construct($color, $nbSeats);

    $this->energy = $energy;
    $this->capacityStorage=$capacityStorage;;

}



    public function getEnergy(): string

    {

        return $this->energy;

    }


    public function setEnergy(string $energy): Truck

    {

        $this->energy = $energy; if (in_array($energy, self::ALLOWED_ENERGIES)) {

            $this->energy = $energy;
    
        }
    
        return $this;
    }


    public function getCapacityStorage(): int

    {

        return $this->capacityStorage;

    }


    public function setCapacityStorage(int $capacityStorage): void

    {

        $this->capacityLevel = $capacityStorage;

    }


    /**
     * Get the value of loading
     */ 
    public function getLoading()
    {
        return $this->loading;
    }

    /**
     * Set the value of loading
     *
     * @return  self
     */ 
    public function setLoading($loading)
    {
        $this->loading = $loading;

        return $this;
    }


    public static function is_load(Truck $truck): string
    {
if ($truck->getLoading()< $truck->getCapacityStorage()){
    return 'in filling';
}
return 'full';
    }


}