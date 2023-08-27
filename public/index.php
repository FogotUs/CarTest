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
$park = new Park(2,[$car,$heli,$moto]);
print_r($park);
?>