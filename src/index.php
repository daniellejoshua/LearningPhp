
<?php 
require_once 'Classes/Car.php';

$car01 = new Car("BMW", "Red");
echo "This car is  a Brand: {$car01->getBrand()} Color: {$car01 ->setColor("violte")} {$car01 -> getColor()} Vechicle type: {$car01->getVehicletype()}";
