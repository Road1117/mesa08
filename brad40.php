<?php
class Bike{
    var $color;
    private $speed = 1;

    function __construct(){
        $this->speed = 0;
    }
    function upspeed(){
        $this->speed += 1.2;
    }
    function downspeed(){
        $this->speed -= 0.8;
    }
    function getspeed(){
        return $this->speed;
    }
}
$myBike = new Bike();
//echo "mybike : {$myBike->getspeed()} ";
$urBike = new Bike();

$myBike->upspeed();
$urBike->downspeed();


echo "{$myBike->getspeed()}<br>";
echo "{$urBike->getspeed()}<br>";