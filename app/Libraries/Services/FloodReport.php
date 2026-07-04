<?php

namespace App\Libraries\Services;

use App\Libraries\Interfaces\Reportable;

class FloodReport implements Reportable
{
    public function generateReport()
    {
        return "Laporan histori prediksi banjir berhasil dibuat.";
    }
}