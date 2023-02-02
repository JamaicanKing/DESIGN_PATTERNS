<?php

include "vehicleInterface.php";
class Car implements VehicleInterface{

    public $color;
    public $numWheels;

    public function __construct(string $color,int $numWheels)
    {
        $this->color = $color;
        $this->numWheels = $numWheels;
    }

    public function IAm(){
        echo "I am a car and my color is " . $this->color . " and I have " . $this->numWheels . " of tires";
    }
}

?>