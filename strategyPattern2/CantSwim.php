<?php
include "swimInterface.php";
    class CantSwim implements swim{

        public function swim() : string {
            return "I can't swim";
        }
    }

?>