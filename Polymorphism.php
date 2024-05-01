<?php 

require_once 'data/Programmer.php';

$company = new Company();
$company->programmer = new Programmer('Eko');
var_dump($company);

$company->programmer = new BackendProgrammer('Lao');
var_dump($company);

$company->programmer = new FrontendProgrammer('Juli');
var_dump($company);

sayHelloProgrammer(new Programmer('Eko'));
sayHelloProgrammer(new BackendProgrammer('Jidan'));
sayHelloProgrammer(new FrontendProgrammer('Jaja'));

