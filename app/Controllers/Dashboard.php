<?php

namespace App\Controllers;

use App\Models\WeatherModel;
use App\Models\PredictionModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $weather = new WeatherModel();
        $prediction = new PredictionModel();

        $data = [
            'totalDataset'   => $weather->countAll(),
            'totalPrediksi'  => $prediction->countAll(),
            'totalRiwayat'   => $prediction->countAll()
        ];

        return view('dashboard', $data);
    }
}