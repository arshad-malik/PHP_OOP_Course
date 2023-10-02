<?php

// Define the Person class with properties and methods
class Person {
    // Declare public properties to store name and age
    public string $name;
    public int $age;

    // Constructor to initialize the object with name and age
    public function __construct(string $name = "Arshad Malik", int $age = 22) {
        $this->name = $name;
        $this->age = $age;
    }

    // Method to display person's information
    public function show() {
        // Using double-quoted strings for variable interpolation
        echo "My Name is $this->name, my age is $this->age";
    }
}

// Create a new Person object with name "Arshad Malik" and age 22
$object1 = new Person("Arshad Malik", 22);

// Call the show method to display the person's information
$object1->show();

?>
