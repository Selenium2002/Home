<?php


class Car {
    private $engineNumber;

    protected $brand;

    public $color;

    public function __construct($engineNumber, $brand, $color) {
        $this->engineNumber = $engineNumber;
        $this->brand = $brand;
        $this->color = $color;
    }

    public function getEngineNumber(){
        return $this->engineNumber;
    }

    public function displayInfo() {
        echo "<h2>This is a $this->color  $this->brand car.</h2>";
    }
}

class ElectricCar extends Car{
    public $batteryCapacity;

    public function __construct($engineNumber, $brand, $color, $batteryCapacity) {
        parent::__construct($engineNumber, $brand, $color);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function displayFullInfo() {
        $this->displayInfo();
        echo "<h2>Battery: $this->batteryCapacity KWH.</h2>";
    }
}

$tesla = new ElectricCar("EN546588", "Tesla", "Violet", 88);

$tesla->displayFullInfo();

echo "Engine Number: " . $tesla->getEngineNumber();



