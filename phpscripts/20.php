// PHP destruct

<?php

class Israel{
    public $city='Raanana';
    public function __construct($city){
        $this->city = $city;
        echo "In construct\n";
    }
    public function __destruct(){
        echo "Destroying ".$this->city."\n";
    }
}

$Ashdod = new Israel('Ashdod');
echo $Ashdod->city."\n"; //Ashdod

$Ashdod1 = $Ashdod;
$Ashdod = null; 
echo "Ashdod will not be used\n";