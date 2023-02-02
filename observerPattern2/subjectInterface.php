<?php

//This interface handles adding, deleting and updating
// all observers

interface subject{
    public function register(Observer $o) : void;
    public function unregister(Observer $o) : void;
    public function notifyObserver() : void;


}
?>