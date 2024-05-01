<?php 

class Person 
{
    const AUTHOR = "Muhammad Jidan";

    var string $name;
    // tanda tanya digunakan agart properties boleh null
    var ?string $address = null;
    var string $country = "Indonesia";

    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    function __destruct()
    {
        echo "Object Person $this->name Is Destroyed\n";
    }

    function sayHello(?string $name)
    {
        if(is_null($name)) {
            echo "Hi Anonymous, my name is $this->name\n";
        } else {
            echo "Hello $name, my name is $this->name\n";
        }
    }

    function info()
    {
        echo "AUTHOR : " . self::AUTHOR . "\n";
    }
}