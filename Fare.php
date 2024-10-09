<?php
class Vehicle {
  public  $name;
  public  $speed;
  public  $mileage;

  public function __construct($name, $speed, $mileage){
    $this->name = $name;
    $this->speed = $speed;
    $this->mileage = $mileage;
  }
  public function fare(){
  return 100;  
  }
}
class Bus extends Vehicle{
 public $capacity = 50;
 public function fare(){
$fare = $this->capacity*100;
$totalFare = $fare +($fare*.10);
return $totalFare;
 }
}

?>