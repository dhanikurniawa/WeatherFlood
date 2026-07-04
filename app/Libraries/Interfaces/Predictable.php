<?php

namespace App\Libraries\Interfaces;

interface Predictable
{
    public function predict(array $weatherData);
}