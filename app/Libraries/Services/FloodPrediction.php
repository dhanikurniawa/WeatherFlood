<?php

namespace App\Libraries\Services;

use App\Libraries\Abstracts\FloodService;
use App\Libraries\Interfaces\Predictable;

class FloodPrediction extends FloodService implements Predictable
{
    public function process(array $data)
    {
        return $this->predict($data);
    }

    public function predict(array $weatherData)
    {
        $python = "C:\\Users\\HP\\AppData\\Local\\Programs\\Python\\Python313\\python.exe";

        $script = ROOTPATH . "python/predict.py";

        $command = $python . " " .
            escapeshellarg($script) . " " .
            $weatherData['suhu'] . " " .
            $weatherData['kelembaban'] . " " .
            $weatherData['tekanan'] . " " .
            $weatherData['angin'] . " " .
            $weatherData['curah'];

        $hasil = trim(shell_exec($command));

        if (empty($hasil)) {
            $hasil = "Prediksi Gagal";
        }

        return $hasil;
    }
}