<?php

// The Observers update method is called when the Subject changes

interface Observer {

    public function update(float $ibmPrice, float $aaplPrice, float $googPrice);

}
