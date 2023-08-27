<?php 
declare(strict_types=1);
namespace App;
class Park{
    private int $parkSize;
    private array $cars;

    public function __construct(int $parksize, array $car){
        if (count($car) > $parksize) print_r("false");
        else {
            $this->parkSize = $parksize;
            $this->cars = $car;
            print_r("true");
            }
    }
}