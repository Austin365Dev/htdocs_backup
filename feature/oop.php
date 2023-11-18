<?php

class Animal
{
    protected $name;

    // constructor
    public function __construct($name)
    {
        $this->name = $name;
    }

    //static member access
    static function info()
    {
        echo "Animal Class <br>";
    }

    public function hello()
    {
        echo "$this->name says Hello <br>";
    }
}

class Dog extends Animal
{
    public function run()
    {
        echo "$this->name is running <br>";
    }
}

Animal::info();
$bobby = new Dog("Aung Aung");
$bobby->run();
