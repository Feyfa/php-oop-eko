<?php

// ini adalah global namespace  
namespace
{
    require_once "data/Conflict.php";
    require_once 'data/Helper.php';

    $conflictOne = new \Data\One\Conflict();
    $conflictOne->nama = 'Muhammad Jidan';
    echo $conflictOne->nama . "\n";

    $conflictTwo = new \Data\Two\Conflict();
    $conflictTwo->barang = 'Aerox 155';
    echo $conflictTwo->barang . "\n";

    echo Helper\APPLICATION . "\n";
    Helper\helpMe();
}