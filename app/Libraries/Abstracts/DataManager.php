<?php

namespace App\Libraries\Abstracts;

abstract class DataManager
{
    abstract public function validate(array $data);

    public function isEmpty($value)
    {
        return empty($value);
    }
}