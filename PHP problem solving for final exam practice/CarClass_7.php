
<!-- Create a class named Car with the properties brand, model, and year. Implement a constructor to
initialize these properties. Also, create a method called getInfo() that returns a string containing the
car&#39;s brand, model, and year. -->

<?php
class Car {
    private $brand;
    private $model;
    private $year;

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function getInfo() {
        return "Brand: " . $this->brand . "\n" .
               "Model: " . $this->model . "\n" .
               "Year: " . $this->year . "\n";
    }
}

// Example usage:
$car = new Car("Toyota", "Camry", 2022);
$info = $car->getInfo();
echo $info;
?>
