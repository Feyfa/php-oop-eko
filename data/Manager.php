<?php

class Manager
{
    var string $name;
    var string $title;

    public function __construct(string $name = "", string $title = 'Manager') 
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name): void
    {
        echo "Hi $name, My Name Is Manager $this->name\n";
    }
}

class VicePresident extends Manager
{
    public function __construct(string $name = "")
    {
        // tidak wajib, tapi direkomendasikan
        parent::__construct($name, 'VP');
    }

    function sayHello(string $name): void
    {
        echo "Hi $name, My Name Is VP $this->name\n";
    }
}