<?php


class Car {
    private $brand;
    private $color;
   private $vehicletype = "car";

    public function __construct($b,$c = "none"){
        $this->brand = $b;
        $this->color = $c;
        
    }

    public function getBrand(){
     return $this->brand;
    }
    public function getColor(){
      return  $this->color;

   } 


   public function setColor($color){

    $allowed_colors = [
        "red",
        "green",
        "blue"
    ];

    if(in_array($color,$allowed_colors)){
        $this ->color = $color; 
    }

   }

   public function getVehicleType() {
        return $this->vehicletype;
    }

}
