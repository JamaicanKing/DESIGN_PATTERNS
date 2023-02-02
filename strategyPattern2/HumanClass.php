<?php

    class Human{
        private $age;
        private $sex;
        private $height;
        private $name;
        private $nationality;

        public $swim;

        public function setSex($sex){
            $this->sex = $sex;
        }

        public function getSex(){
            return $this->sex;
        }

        public function setAge($age){
            $this->age = $age;
        }

        public function getAge(){
            return $this->age;
        }

        public function setHeight($height){
            $this->height = $height;
        }

        public function getHeight(){
            return $this->height;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function setNationality($nationality){
            $this->nationality = $nationality;
        }

        public function getNationality(){
            return $this->nationality;
        }

        public function tryToSwim(){
            return $this->swim;
        }

        public function setSwimAbility(swim $newSwim){
                    $this->swim = $newSwim->swim();
        }   



    }

?>