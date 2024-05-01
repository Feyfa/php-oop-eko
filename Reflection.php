<?php 

require_once 'exception/ValidationException.php';
require_once 'data/LoginRequest.php';
require_once 'helper/ValidationUtil.php';

$request = new LoginRequest();
$request->username = "eko";
$request->password = "123456";

// ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);

class RegisterUserRequest
{
    public ?string $username;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->username = 'jidan123';
$register->address = 'Jakarta';
$register->email = 'jidan@gmail.com';

ValidationUtil::validateReflection($register);