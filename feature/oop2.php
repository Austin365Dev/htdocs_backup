<?php

interface Animal2
{
    public function run();
}

class Dog2 implements Animal2
{
    public function run()
    {
        echo "The Dog is running... <br>";
    }
}

class Cat2 implements Animal2
{
    public function run()
    {
        echo "The Cat is running... <br>";
    }
}

$miPhyu = new Cat2;
$miPhyu->run();



function app(Animal2 $obj)
{
    $obj->run();
}

app(new Dog2);
app(new Cat2);
