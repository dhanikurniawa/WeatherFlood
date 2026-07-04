<?php

namespace App\Libraries\Interfaces;

interface Manageable
{
    public function save(array $data);

    public function update($id, array $data);

    public function delete($id);
}