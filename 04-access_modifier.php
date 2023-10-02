<?php

// ---------------------------------public modifier --------------
class Person {
    public $name; // This is a public property

    // Constructor method to initialize the name property
    public function __construct(string $name) {
        $this->name = $name; // Setting the value of the public property
    }
}

$personObject = new Person("arshad-malik"); // Creating an instance of the Person class
$ownobject = new Person("umair bin ali"); // Creating another instance

// Accessing the public property of the objects and displaying the names
echo $personObject->name . "\n" . $ownobject->name;

// Explanation Public modifire----------
// We define a class named Person with a public property $name. In PHP, the public modifier allows the property to be accessed from outside the class.

// Inside the class, we have a constructor method __construct that accepts a name as a parameter and sets the value of the public property $name to the provided name.

// We create two instances (objects) of the Person class: $personObject and $ownobject, each with a different name.

// We use the -> operator to access and display the name property of both objects. Since the property is public, we can access it directly from outside the class.

// Finally, we echo the names of the two objects, displaying the values of the name property.

// In this code, the public modifier allows us to access the $name property directly from outside the class, demonstrating the concept of visibility in PHP classes.

// ----------------------------------Protective modifier ------------------------
class Person {
    protected $name; // Protected property

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name; // Accessing protected property within the class
    }
}

class Employee extends Person {
    public function introduce() {
        echo "Hello, my name is " . $this->getName(); // Accessing protected property in a subclass
    }
}

$employee = new Employee("John");
$employee->introduce(); // Output: Hello, my name is John

//You cannot directly set the protected property like this:
$employee->name = "arshadmalik"; // This will result in an error

//Instead, you should use the constructor to set the name property:
$employee = new Employee("arshadmalik");

// -------------------------------private modifier --------------------------------
class Calculator {
    private function add($a, $b) {
        return $a + $b;
    }

    public function calculateSum($a, $b) {
        return $this->add($a, $b); // Accessing private method within the class
    }
}

$calc = new Calculator();
$result = $calc->calculateSum(10, 20);
echo $result; // Output: 30


 ?>