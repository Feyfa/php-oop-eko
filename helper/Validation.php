<?php 

function validateLoginRequest(LoginRequest $request)
{
    if(!isset($request->username))
    {
        throw new ValidationException('Username Is Null');
    }
    else if(!isset($request->password))
    {
        throw new ValidationException('Password Is Null');
    }
    else if(trim($request->username) === '')
    {
        throw new Exception('Username Is Empty');
    }
    else if(trim($request->password) === '')
    {
        throw new Exception('Password Is Empty');
    }
}