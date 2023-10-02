<?php
// Property Overriding Example

// Define the base class "Car"
class Car {
    public $brand = "Generic Car"; // Property in the base class

    // Method to start the engine
    public function startEngine() {
        echo "Engine started!";
    }
}

// Define a subclass "SportsCar" that extends the base class "Car"
class SportsCar extends Car {
    public $brand = "Ferrari"; // Property overriding

    // Method to turbocharge the sports car
    public function turboCharge() {
        echo "Turbocharged!";
    }
}

// Create an instance of the "SportsCar" class
$sportsCar = new SportsCar();

// Access and print the overridden property "brand"
echo $sportsCar->brand; // Output: Ferrari

// Method Overriding Example

// Define the base class "Car"
class Car {
    // Method to start the engine
    public function startEngine() {
        echo "Generic car engine started!";
    }
}

// Define a subclass "SportsCar" that extends the base class "Car"
class SportsCar extends Car {
    // Method overriding to provide a specialized implementation
    public function startEngine() {
        echo "Sports car engine started!"; // Method overriding
    }
}

// Create an instance of the "SportsCar" class
$sportsCar = new SportsCar();

// Call the overridden method "startEngine"
$sportsCar->startEngine(); // Output: Sports car engine started!
?>
