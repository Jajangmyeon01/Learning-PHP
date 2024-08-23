<?php 

class Car {

    // Properties / Fields //
    private $brand;
    private $color;
   // private $vehicleType = "car";

    // Constructor //
    public function __construct($brand, $color = "none") {
        $this->brand = $brand;
        $this->color = $color;
    }
    
    // Getter & Setter Methods //
    public function getBrand() {
        return $this->brand;
    }
    public function setBrand($brand) {
        $this->brand = $brand;
    }
    public function getColor() {
        return $this->color;
    }
    public function setColor($color) {
        $allowedColors = [
            "Red",
            "Green",
            "Blue",
            "Yelow"
        ];
        if (in_array($color, $allowedColors)) {
            $this->color = $color;
        }
    }


    // Method //
    public function getCarInfo() {
        return "Brand: ". $this->brand . ", Color: " . $this->color;
    }
}




/*
    // Properties / Fields //
$car1 = new Car("Honda", "White");
$car2 = new Car("Ford");
$car3 = new Car("Toyota", "Blue");

    // Constructor //
echo $car4->vehicleType;
echo $car5->brand;

    // Method //
echo $car6->getCarInfo;
echo "<br>";
echo $car7->vehicleType;
*/