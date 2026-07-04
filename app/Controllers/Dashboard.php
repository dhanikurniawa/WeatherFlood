<?php

namespace App\Controllers;

use App\Models\WeatherModel;
use App\Models\PredictionModel;
use App\Libraries\Services\NotificationService;

class Dashboard extends BaseController
{
    public function index()
    {
        $weather = new WeatherModel();
        $prediction = new PredictionModel();

        $notification = new NotificationService();

        $data = [
            'totalDataset'   => $weather->countAll(),
            'totalPrediksi'  => $prediction->countAll(),
            'totalRiwayat'   => $prediction->countAll(),
            'notification'   => $notification->sendNotification("Selamat datang di Flood Information and Help Center")
        ];

        return view('dashboard', $data);
    }
}