
<!-- Create a class named Rectangle with properties width and height. Implement methods to set the
dimensions, calculate the area, and calculate the perimeter of the rectangle. -->


<?php
class Rectangle {
    public $width;
    public $height;

    public function setDimensions($width, $height) {
        // Add validation logic here if needed
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }

    public function calculatePerimeter() {
        return 2 * ($this->width + $this->height);
    }
}

// Example usage:
$rectangle = new Rectangle();
$rectangle->setDimensions(5, 10);

$area = $rectangle->calculateArea();
$perimeter = $rectangle->calculatePerimeter();

echo "Rectangle Dimensions: {$rectangle->width} (width) x {$rectangle->height} (height)\n";
echo "Area: $area\n";
echo "Perimeter: $perimeter\n";
?>


