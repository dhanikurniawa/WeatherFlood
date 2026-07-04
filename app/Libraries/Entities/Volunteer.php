<?php

namespace App\Libraries\Entities;

use App\Libraries\Abstracts\User;

class Volunteer extends User
{
    public function login()
    {
        return "Volunteer {$this->name} logged in successfully.";
    }
}