<?php 
declare(strict_types=1);
namespace App;
class Car extends Vehicle{
    public function getInfo():string{
        return "Car:{$this->getModel()}, {$this->getSpeed()}Km/h, $ {$this->getPrice()}";
    }

}
?>