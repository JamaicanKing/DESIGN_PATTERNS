<?php

    include "vehicleFactory.php";

$vehicle = new vehicleFactory();

//Get car class object
$vehicle1 = vehicleFactory::getVehicle("car","blue",4);
$vehicle1->IAm() . "<br>";

$vehicle2 = vehicleFactory::getVehicle("bike","yellow",2);
$vehicle2->IAm() . "<br>";

$vehicle3 = vehicleFactory::getVehicle("truck","yellow",8);
$vehicle3->IAm() . "<br>";

             


?>