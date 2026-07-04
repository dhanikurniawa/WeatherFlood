<?php

namespace App\Libraries\Entities;

use App\Libraries\Abstracts\User;

class Admin extends User
{
    public function login()
    {
        return "Admin {$this->name} logged in successfully.";
    }
}