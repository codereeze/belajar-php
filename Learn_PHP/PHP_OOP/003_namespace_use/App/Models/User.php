<?php

namespace App\Models;

class User
{
    public static function save($name, $nickname, $username)
    {
        return <<<user
        Name: $name
        Nickname: $nickname
        Username: $username

        Data User saved!
        user;
    }
}
