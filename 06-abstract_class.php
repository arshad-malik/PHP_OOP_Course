<?php 


 // Define an abstract parent class
abstract class ParentClass {
    // Public property
    public $name;

    // Abstract method to be implemented by child classes
    abstract protected function calc($a, $b);
}

// Create a child class that extends the parent class
class ChildClass extends ParentClass {
    // Implement the abstract method from the parent class
    public function calc($a, $b) {
        echo $a + $b;
    }
}

// Create an instance of the child class
$test = new ChildClass();

// Call the calc method to perform the calculation
$test->calc(10,25); // Outputs: 35
?>