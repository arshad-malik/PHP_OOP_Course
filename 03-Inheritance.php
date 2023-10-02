<?php
// Define the Employee class to represent basic employee information
class Employee {
    // Public properties to store employee information
    public $name;
    public $age;
    public $salary;

   
     //Constructor to initialize an Employee object with provided information.
    
   
    public function __construct(string $name, int $age, float $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    /**
     * Display the full details of the employee.
     */
    public function fullDetails() {
        echo "My name is $this->name. I am $this->age years old. My salary is $this->salary.";
    }
}

// Define the Manager class as an extension of the Employee class
class Manager extends Employee {
    // Additional properties or methods specific to managers can be added here if needed.
    public $travilingCost=1000;
    public $phone=300;
    public $totalSalary;
    function fullDetails(){
        echo "$this->totalSalary = $this->salary + $this->travilingCost + $this->phone ";
    }
}

// Create a Manager object
$object1 = new Manager("Arshad Malik", 22, 2000.00);

// Display the full details of the manager
$object1->fullDetails();

?>