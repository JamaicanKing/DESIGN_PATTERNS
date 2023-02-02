<?php

    include_once "HumanClass.php";

    class male extends Human{
        public function __construct($name,$nationality,$height){
            
            $this->setAge(22);
            $this->setSex("male");
            $this->setName($name);
            $this->setHeight($height);
            $this->setNationality($nationality);
            $swim = new CantSwim;
            $this->swim = $swim->swim();

        }
    }
?>