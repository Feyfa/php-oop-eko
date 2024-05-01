<?php 

class Data implements IteratorAggregate
{
    var string $first = 'first';
    public string $second = 'second';
    private string $third = 'third';
    protected string $forth = 'forth';

    // saat menggunakan implements IteratorAggregate
    // nah saat kita melakukan object iterasi
    // maka key dan value ini lah yang akan digunakan
    // public function getIterator(): Traversable
    // {
    //     $array = [
    //         'first' => $this->first,
    //         'second' => $this->second,
    //         'third' => $this->third,
    //         'forth' => $this->forth,
    //     ];

    //     return new ArrayIterator($array);
    // }


    // jika menggunakan yield
    public function getIterator(): Traversable
    {
        yield 'first' => $this->first;
        yield 'second' => $this->second;
        yield 'third' => $this->third;
        yield 'forth' => $this->forth;
    }
}

$data = new Data();

// saat menggunakan foreach pada object
// maka yang akan ditangkap itu hanya propeti yang visibility nya public saja
// yang private dan protected itu tidak akan ditampilkan
// tetapi jika sebelumnya telah implements IteratorAggregate maka data yang diambil yang berada di getIterator
foreach($data as $property => $value)
{
    echo "$property => $value\n";
}