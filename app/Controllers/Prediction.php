<?php

namespace App\Controllers;

use App\Models\PredictionModel;
use App\Libraries\Services\FloodPrediction;

class Prediction extends BaseController
{
    public function index()
    {
        return view('prediction/index');
    }

    public function process()
    {
        $suhu = $this->request->getPost('suhu');
        $kelembaban = $this->request->getPost('kelembaban');
        $tekanan = $this->request->getPost('tekanan_udara');
        $angin = $this->request->getPost('kecepatan_angin');
        $curah = $this->request->getPost('curah_hujan');
        $hujan = $this->request->getPost('hujan');

        // Menggunakan Service OOP
        $predictionService = new FloodPrediction("Flood Prediction Service");

        $hasil = $predictionService->process([
            'suhu' => $suhu,
            'kelembaban' => $kelembaban,
            'tekanan' => $tekanan,
            'angin' => $angin,
            'curah' => $curah,
            'hujan' => $hujan
        ]);
        
        $model = new PredictionModel();

        $model->save([
            'tanggal' => date('Y-m-d H:i:s'),
            'suhu' => $suhu,
            'kelembaban' => $kelembaban,
            'curah_hujan' => $curah,
            'hasil' => $hasil
        ]);

        return redirect()->to('/history');
    }
}