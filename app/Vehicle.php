<?php
declare(strict_types=1);
namespace App;
abstract class Vehicle implements VehicleInterface{
    private string $Model;
    private int $Speed;
    private int $Price;

    public function __construct(string $Model,int $Speed,int $Price){
        $this-> Model = $Model;
        $this-> Speed = $Speed;
        $this-> Price = $Price;
    }
    public function getModel():string{
        return $this->Model;
    }
    public function getPrice():int{
        return $this->Price;
    }
    public function getSpeed():int{
        return $this ->Speed;
    }
    public function setModel(string $model){
        $this -> Model = $model;
    }
    public function setPrice(int $price){
        $this -> Price = $price;
    }
    public function setSpeed(int $speed){
        $this -> Speed = $speed;
    }

    public abstract function getInfo();

}

?>