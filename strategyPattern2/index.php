<?php

    require_once "MaleClass.php";
    require_once "FemaleClass.php";
    require_once "CantSwim.php";
    require_once "CanSwimClass.php";
    $gerald = new male("Gerald Collins","Jamaican","5'9");
    echo $gerald->getName() . "\n";
    echo $gerald->getAge() . "\n";
    echo $gerald->getHeight() . "\n";
    echo $gerald->getNationality() . "\n";
    echo $gerald->tryToSwim() . "\n";
   $gerald->setSwimAbility(new CanSwim);
    echo $gerald->tryToSwim() . "\n";
    echo "\n\n";

    $ashley = new Female("Ashley Robinson", "American","5'6");
    echo $ashley->getName() . "\n";
    echo $ashley->getAge() . "\n";
    echo $ashley->getHeight() . "\n";
    echo $ashley->getNationality() . "\n";
    echo $ashley->tryToSwim() . "\n";


?>
