<?php

// access control => public, private, protected 
// syntax and design pattern

// object htel mhr property and method shi dl
class Animal
{

    // constructor
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public $age; // property
    private $name;  // property

    public function showName()
    {
        echo "$this->name";
    }

    public function hello()
    {  // method
        echo "Hello Thiss is public method!";
    }
}

$aungNat = new Animal("Louis", 10);
$aungNat->hello();
echo "<br>";
echo "$aungNat->age";
$aungNat->showName();
