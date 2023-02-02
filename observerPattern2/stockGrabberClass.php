<?php
include "subjectInterface.php";

class StockGrabber implements Subject{
   
    private $observers = [];
    private $ibmPrice = 0;
    private $aaplPrice = 0;
    private $googPrice = 0;

    public function register(Observer $newObserver) : void
    {
        array_push($this->observers, $newObserver);
    }

    public function unregister(Observer $deleteObserver) : void
    {
        foreach($this->observers as $key => $observer){
            if($observer->getId() == $deleteObserver->getId()){
            echo "Observer with ID ". $deleteObserver->getId() . " will be deleted\n";
            unset($this->observers[$key]);
            }
        }
    }


    public function notifyObserver(): void
    {
        foreach($this->observers as $observer)
        {
            $observer->update($this->ibmPrice,$this->aaplPrice,$this->googPrice);
        }
    }

    public function setIBMPrice(float $ibmPrice){
        $this->ibmPrice = $ibmPrice;
        return $this->notifyObserver();
    }



    public function setAaplPrice(float $aaplPrice){
        $this->aaplPrice = $aaplPrice;
        return $this->notifyObserver();
    }

    public function setGoogPrice(float $googPrice){
        $this->googPrice = $googPrice;
        return $this->notifyObserver();

    }
}


?>