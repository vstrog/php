//Class declaration 
<?php
class Product {
    private $cpu;
    private $mb;
    private $psu;
    public function __construct($cpu, $mb) {
        $this->cpu = $cpu;
        $this->mb = $mb;
    }
    function getCpu() {
        return $this->cpu;
    } 
    function setCpu($cpu) {
        $this->cpu = cpu;
    } 
    function getMb() {
        return $this->mb;
    } 
    function setMb($mb) {
        $this->mb = mb;
    } 
}

$Product = new Product('Core i7 7700', 'Z270');
echo $Product->getCpu();