<?php
class truck implements VehicleInterface{

    public $color;
    public $numWheels;

    public function __construct(string $color,int $numWheels)
    {
        $this->color = $color;
        $this->numWheels = $numWheels;
    }

    public function IAm(){
        echo "I am a truck and my color is " . $this->color . " and I have " . $this->numWheels . " of tires";
    }
}

?>