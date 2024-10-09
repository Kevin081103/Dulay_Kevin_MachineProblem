<?php
class Vehicle {
  public  $name;
  public  $speed;
  public  $mileage;
  public static $vehicle = "automobile"; 

  public function __construct($name, $speed, $mileage){
    $this->name = $name;
    $this->speed = $speed;
    $this->mileage = $mileage;
  }
  public static function getvehicle(){
    return self::$vehicle;
  }
}
class Car extends Vehicle{

}
class Bus extends Vehicle{

}
?>