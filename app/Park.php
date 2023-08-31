<?php 
declare(strict_types=1);
namespace App;
class Park{
    private int $parkSize;
    private array $cars;

    public function __construct(int $parksize = 3){
            $this->parkSize = $parksize;
            $this->cars = [];
    }
    public function setCars(array $car){
        if (count($this->cars) < $this->parkSize ){
            array_push($this->cars,$car);
            print_r('true ');
        }
        else print_r('false ');
    }
    public function sumCost ():int{
        $resoult = 0;
        foreach ($this->cars as $car ){
            foreach ($car as $element){
                   $resoult += $element->getPrice();
            }
        }
        return $resoult;
    }
    public function maxCost ():int{
        $resoult = [];
        foreach ($this->cars as $car ){
            foreach ($car as $element){
                   array_push($resoult,$element->getPrice());
            }
        }
        return max($resoult);
    }
    public function middleCost ():int{
        $resoult = 0;
        foreach ($this->cars as $car ){
            foreach ($car as $element){
                $resoult += $element->getPrice();
            }
        }
        return $resoult/count($this->cars);
    }
    public function massInfo(){
        $resoult = [];
        foreach ($this->cars as $car ){
                foreach ($car as $element){
                    array_push($resoult,$element->getInfo());
                }
            }
        return $resoult;
        }   

    }

    #public function mostCost (array $car):int{
    #       rsort($car);
    #       return ($car[0]);
    #}
    #public function sumCost (array $car):int{
    #   return array_sum($car);
    #}
    #public function middleCost (array $car):int{
    #    return array_sum($car)/count($this->cars);
    # }
 

