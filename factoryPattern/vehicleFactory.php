<?php

include "carClass.php";
include "truckClass.php";
include "bikeClass.php";

class vehicleFactory {
    //getShape method returns object of input type shape
    static function getVehicle(String $vehicleType,String $color,int $numberOfWheels){
       if($vehicleType == null || $color == null || $numberOfWheels == null){
          return null;
       }		
       if($vehicleType == "car"){
          return new Car($color,$numberOfWheels);
       }elseif($vehicleType == "truck"){
        return new truck($color,$numberOfWheels);
       }elseif($vehicleType == "bike"){
        return new bike($color,$numberOfWheels);
       }
  
    }
 }

?>