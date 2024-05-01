<?php 

// ===============================================================================
// class Zero
// {
//     private array $properties = [];

//     public function __get($name)
//     {
//         echo "Accect property $name\n";
//         return "CONTOH";
//     }
    
//     public function __set($name, $value)
//     {
//         echo "Set Property $name with $value\n";
//     }
    
//     public function __isset($name): bool
//     {
//         echo "Isset : $name";
//         return false;
//     }
    
//     public function __unset($name)
//     {
//         echo "Unset $name";
//     }
// }

// $zero = new Zero();

// // ketika mengakses properti yang tidak ada, maka magic function __get($name) akan dijalankan
// echo $zero->firstName , PHP_EOL;

// // ketika me set sebuah properti yang tidak ada, maka magic function __set($name. $value) akan dijalankan
// $zero->firstName = 'Eko';

// // ketika menggunakan isset($firstName), dan properti nya yang di cek nya tidak ada, maka magic function __isset($name) akan dijalankan
// isset($zero->firstName);

// // ketika menggunakan unset($firstName), dan properti nya yang di cek nya tidak ada, maka magic function __isset($name) akan dijalankan
// unset($zero->firstName);
// ===============================================================================





// ===============================================================================
class Zero
{
    private array $properties = [];

    public function __get($name)
    {
        return $this->properties[$name];
    }
    
    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }
    
    public function __isset($name): bool
    {
        return isset($this->properties[$name]);
    }
    
    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call function $name with arguments $join\n";
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call function $name with arguments $join\n";   
    }


}

$zero = new Zero();
$zero->firstName = 'Muhammad';
$zero->middleName = 'Jidan';
$zero->lastName = 'Ganteng';

echo "First Name : $zero->firstName\n";
echo "Middle Name : $zero->middleName\n";
echo "Last Name : $zero->lastName\n";

// ketika menggunakan method yang tidak ada di dalam clas nya maka yang akan dijalankan itu adalah __call() yang berada di dalam class nya
$zero->sayHello("Muhammad", "Jidan");
Zero::sayHello('Rafeyfa', 'Zulfiyani');
// ===============================================================================



