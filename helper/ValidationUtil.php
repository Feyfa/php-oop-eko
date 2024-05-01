<?php 

class ValidationUtil
{
    static function validate(LoginRequest $request)
    {
        if(!isset($request->username))
        {
            throw new ValidationException('Username Is Not Set');
        }
        else if(!isset($request->password))
        {
            throw new ValidationException('Password Is Not Set');
        }
        else if(is_null($request->username) === '')
        {
            throw new Exception('Username Is Null');
        }
        else if(is_null($request->password) === '')
        {
            throw new Exception('Password Is Null');
        }
    }

    static function validateReflection($request)
    {
        $reflection = new ReflectionClass($request);
        
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        
        foreach($properties as $property)
        {
            if(!$property->isInitialized($request))
            {
                throw new ValidationException("$property->name is not set");
            } 
            else if(is_null($property->getValue($request)))
            {
                throw new ValidationException("$property->name is null");
            }
        }
    }
}