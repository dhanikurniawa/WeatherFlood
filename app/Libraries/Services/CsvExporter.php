<?php

namespace App\Libraries\Services;

use App\Libraries\Interfaces\Exportable;

class CsvExporter implements Exportable
{
    public function export($format)
    {
        return "Data exported to {$format}.";
    }
}