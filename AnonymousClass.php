<?php 

interface HelloWorld
{
    function sayHello(): void;
}

// ('Eko') itu adalah parameter yang dibutuhkan constructor
$helloWorld = new class('Muhammad Jidan') implements HelloWorld {
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo "Hello $this->name\n";
    }
};

$helloWorld->sayHello();