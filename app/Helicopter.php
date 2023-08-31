<?php 
declare(strict_types=1);
namespace App;
class Helicopter extends Vehicle{
    public function getInfo():string{
        return "Helicopter:{$this->getModel()}, {$this->getSpeed()}Km/h, $ {$this->getPrice()}";
    }

}
?>