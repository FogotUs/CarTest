<?php 
declare(strict_types=1);
namespace App;
interface VehicleInterface{
    public function getModel();
    public function getPrice();
    public function getSpeed();
    public function getInfo();
    
}
?>