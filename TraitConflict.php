<?php 

trAit A
{
    function doA()
    {
        echo "a\n";
    }
    
    function doB()
    {
        echo "b\n";
    }
}

trait B
{
    function doA()
    {
        echo "A\n";
    }
    
    function doB()
    {
        echo "B\n";
    }
}

class Sample
{
    use A, B
    {
        // function doA itu diambil di trait A daripada di B
        A::doA insteadof B;
        // function doB itu diambil di trait B daripada di A
        B::doB insteadof A;
    }
}

$sample = new Sample();
$sample->doA();
$sample->doB();