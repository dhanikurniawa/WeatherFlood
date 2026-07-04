<?php

namespace App\Libraries\Services;

use App\Libraries\Abstracts\DataManager;
use App\Libraries\Interfaces\Manageable;

class WeatherManager extends DataManager implements Manageable
{
    public function validate(array $data)
    {
        foreach ($data as $value) {
            if ($this->isEmpty($value)) {
                return false;
            }
        }

        return true;
    }

    public function save(array $data)
    {
        return true;
    }

    public function update($id, array $data)
    {
        return true;
    }

    public function delete($id)
    {
        return true;
    }
}