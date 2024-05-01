<?php 

class SocialMedia
{
    public string $name;
}

class Facebook extends SocialMedia
{
    final public function login(string $username, string $password): bool
    {
        return true;
    }
}

class FakeFacebook extends Facebook
{   
    // ini tidak bisa di override, karena function ini yang berada di parentnya sudah di tulis final
    // public function login(string $username, string $password): bool
    // {
    //     return false;
    // }
}

