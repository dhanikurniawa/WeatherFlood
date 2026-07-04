<?php

namespace App\Libraries\Abstracts;

abstract class User
{
    protected $name;
    protected $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    abstract public function login();

    public function logout()
    {
        return "User logout successfully.";
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }
}