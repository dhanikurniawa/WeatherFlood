<?php

namespace App\Libraries\Abstracts;

abstract class FloodService
{
    protected $serviceName;

    public function __construct($serviceName)
    {
        $this->serviceName = $serviceName;
    }

    abstract public function process(array $data);

    public function getServiceName()
    {
        return $this->serviceName;
    }
}