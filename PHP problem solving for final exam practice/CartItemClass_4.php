<!-- You are building a shopping cart system for an e-commerce website. Define a class named CartItem
that represents an item in the cart. The class should have properties for product name, price, and
quantity. Implement a method to calculate the total cost of the item. -->

<?php
class CartItem {
    private $productName;
    private $price;
    private $quantity;

    public function __construct($productName, $price, $quantity) {
        $this->productName = $productName;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getTotalCost() {
        return $this->price * $this->quantity;
    }

    public function getProductName() {
        return $this->productName;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getQuantity() {
        return $this->quantity;
    }
}

// Example usage:
$item = new CartItem("Example Product", 10.99, 2);

$totalCost = $item->getTotalCost();
echo "Product: " . $item->getProductName() . "\n";
echo "Price per unit: $" . $item->getPrice() . "\n";
echo "Quantity: " . $item->getQuantity() . "\n";
echo "Total Cost: $" . $totalCost . "\n";
?>

