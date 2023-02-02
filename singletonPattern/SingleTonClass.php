<?php
    Class TimeLogger{

        static private $loginTime; 
        

        private function __construct(){
            echo "login Successful";
        }

        public static function login(){
            if(self::$loginTime == null){
                self::$loginTime = new TimeLogger;
            }

            return self::$loginTime;
        }
    }

    $login1 = TimeLogger::login();
?>