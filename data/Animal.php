<?php

namespace Data;

require_once 'data/Food.php';

abstract class Animal 
{
    // untuk properti tidak harus ditambahkan abtract
    public string $name;

    // untuk function harus ditambahkan function
    abstract public function run(): void;

    abstract public function suara(): void;

    abstract public function eat(AnimalFood $animalFood): void;
}

class Cat extends Animal
{
    public function run(): void
    {
        echo "Cat $this->name is running\n";
    }

    public function suara(): void
    {
        echo "Cat $this->name Suaranya = Miaw Miaw\n";
    }

    // ini adlah contravariance
    public function eat(AnimalFood $animalFood): void
    {
        echo "Cat is eating\n";
    }
}

class Dog extends Animal
{
    public function run(): void
    {
        echo "Dog $this->name is running\n";
    }

    public function suara(): void
    {
        echo "Dog $this->name Suaranya = Guk Guk\n";
    }

    // ini adlah contravariance
    public function eat(Food $food): void
    {
        echo "Dog Is Eating\n";
    }
}