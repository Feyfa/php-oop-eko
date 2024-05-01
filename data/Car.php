<?php 

namespace Data;

/*
Perbedaan Interface dengan Abstract
- Interface hanya boleh function, Abstract tu boleh properti dan function
- Interface saat digunakan di childnya menggunakan implements, Abstract Menggunakan extends
- Saat child menggunakan implements itu boleh lebih dari 1, saat child menggunakan extends itu hanya 1 saja 
*/
interface HasBrand
{
    function getBrand(): string;
}

interface isMaintenance
{
    function isMaintenance(): bool;
}

interface Car extends HasBrand
{
    function drive(): void;
    function getTire(): int;
}

class Avanza implements Car, isMaintenance
{
    public function drive(): void
    {
        echo "Driva Avanza\n";
    }

    public function getTire(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return 'Toyota';
    }

    public function isMaintenance(): bool
    {
        return false;
    }
}