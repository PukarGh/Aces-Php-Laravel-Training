<?php

// Code

$age = 20;
// Losely typed language

// String
$string = 'something';

// Integer
$age = 20;

// Float
$percent = 60.5;

// Boolean
$pass = true;

// Array
$users = [
    'John',
    'jane',
    20,
    40.6,
];

$users[1]; //John

$users[4] = 'Someone';

// NULL
$date = null;

// Comment


// Conditional
// If else
$age = 20;


if ($age > 10) {
    //echo 'You older than 10 years';
} elseif ($age > 15){
    //echo 'You are a teenager';
}
elseif ($age > 18){
    //echo 'You are a teenager';
}
else {
    //echo 'You are younger than 10 years';
}

// Switch
$age = 20;
switch ($age) {
    case 10:
        // When age is 10
        break;
    case 15:
        // When Age is 15
        break;
    case 20:
        // When age is 20
        break;
    default:
        // When no condition above matches
}

// For Loop
for ($start = 1; $start < 10; $start++){
    //echo $start . '<br>';
}

// Foreach loop
// Array
$users = [
    'John',
    'Jane',
    'Ram',
    'Shyam'
];

foreach ($users as $user){
    //echo $user;
}

// While loop
$start = 0;
//echo 'While loop';
while ($start < 10){
    //echo 'Start = ' . $start;
    $start++;
}

// Concatination operator
$name = "pukar";
//echo 'My name is ' . $name;

// Function
function sayHello() {
    echo 'Hello World';
}

function add($firstNumber, $secondNumber) {
    $result = $firstNumber + $secondNumber;
    return $result;
}

// Default parameter
function powerOf($number, $power = 2){
    echo $number;
    echo $power;
}

//powerOf(2);

$name = 'pukar';
$capitalizedName = strtoupper($name);
//echo $capitalizedName;

// Operators
$sum = 1 * 2;

// comparison
$firstValue = 10;
$secondValue = '10';

$result = $firstValue >= $secondValue;
//var_dump($result);

// Logical Operators
$first = true;
$second = false;


$result = !$first;

// Increment/Decrement
$count = 0;
$count--;

// Ternary operator
$count = 50;
$result = $count > 10 ? 'Greater than 10' : 'Less than 10';




// Class
class Person
{
    // Constructor
    public function __construct($name, $age, $salary){
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    // Public
    // Protected
    // Private

    // Attribute
    public $name;
    public $age;
    protected $address;
    private $houseNumber;

    // Method
    public function sayHello() {
        echo 'Hello';
        echo $this->houseNumber;
    }

}

$john = new Person('John', 50, 100000);
$jane = new Person('Jane', 20, 10000);

//echo $john->age;
//echo $jane->age;

// Inheritance
class Student extends Person {
    public $faculty;

}

class Teacher extends Person {
    public $salary;
}

$ram = new Student('Ram', 20, 0);
echo $ram->houseNumber; // ERROR

























