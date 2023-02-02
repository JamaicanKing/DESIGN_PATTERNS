<?php
require "ObserverInterface.php";

    Class StockObserver implements Observer
    {
        private $ibmPrice = 0;
        private $aaplPrice = 0;
        private $googPrice = 0;

        private static  $observerIdTracker = 0;
        private $observerId;
        private $stockGrabber;
        private $_id;

        public function __construct(Subject $stockGrabber){

            $this->stockGrabber = $stockGrabber;
            $this->observerId = ++self::$observerIdTracker;

            echo "New Observer: %s\n" . $this->observerId . "\n";
            $this->_id = md5(time() * rand(1,100));
            $stockGrabber->register($this);
        }

        public function getId()
        {
            return $this->_id;
        }

        public function update(float $ibmPrice, float $aaplPrice, float $googPrice)
        {
            $this->ibmPrice = $ibmPrice;
            $this->aaplPrice = $aaplPrice;
            $this->googPrice = $googPrice;

            return $this->printThePrices();
        }

        public function printThePrices(){
            echo $this->observerId . "\nIBM: " . $this->ibmPrice . "\nAAPL: " .
                            $this->aaplPrice . "\nGOOG: " . $this->googPrice . "\n";
        }
    }

?>