<?php 
declare(strict_types=1);
namespace App;
class Motorbike extends Vehicle{
    public function getInfo():string{
        return "Motorbike:{$this->getModel()}, {$this->getSpeed()}Km/h, $ {$this->getPrice()}";
    }
}

?>