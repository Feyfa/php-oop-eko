<?php 

namespace Data\Traits;

trait SayGoodBay
{
    public function goodBye(?string $name): void 
    {
        if(is_null($name))
        {
            echo "Good Bye\n";
        }
        else 
        {
            echo "Good Bye $name\n";
        }
    }
}

trait SayHello
{
    public function hello(?string $name): void 
    {
        if(is_null($name))
        {
            echo "hello\n";
        }
        else 
        {
            echo "hello $name\n";
        }
    }

    private function hai(string $name): void
    {
        if(is_null($name))
        {
            echo "hai anonymous\n";
        }
        else 
        {
            echo "hai $name\n";
        }
    }
}

trait HasName
{
    public string $name;
}

trait CanRun
{
    public abstract function run(): void;
}

class ParentPerson
{
    public function goodBye(?string $name): void
    {
        echo "Good Bye In Person\n";
    }

    public function hello(?string $name): void
    {
        echo 'Hello In Person' . PHP_EOL;
    }
}

trait All
{
    // ketika menggunakan trait, maka function dan properti yang ada di dalamnya itu bisa digunakan terhadap class ini
    use SayGoodBay, SayHello, HasName, CanRun 
    {
        // mengubah visibility yang awalnya private menjadi public
        hai as public;
    }
}

class Person extends ParentPerson
{
    use All;

    public function run(): void
    {
        echo "Person $this->name Is Running\n";
    }
}