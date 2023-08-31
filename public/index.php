<?php
declare(strict_types=1);
use App\Car;
use App\Helicopter;
use App\Park;
use App\Motorbike;
require_once("../vendor/autoload.php");
$car = new Car("BMW",1488,2435);
$heli = new Helicopter("littleBird",456,1337);
$moto = new Motorbike ("RedHeadBandit",34,500);
$park = new Park();
$park->setCars([$heli]);
$park->setCars([$car]);
$park->setCars([$moto]);
print_r("{$park->sumCost()}\n");
print_r("{$park->maxCost()}\n");
print_r("{$park->middleCost()}\n");
print_r($park->massInfo());
?>