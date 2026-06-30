<?php

namespace App\Controllers;
use App\Models\PredictionModel;

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

    $python = "C:\\Users\\HP\\AppData\\Local\\Programs\\Python\\Python313\\python.exe";

$script = ROOTPATH . "python/predict.py";

$command = $python . " " .
           escapeshellarg($script) . " " .
           $suhu . " " .
           $kelembaban . " " .
           $tekanan . " " .
           $angin . " " .
           $curah;

$hasil = trim(shell_exec($command));
if (empty($hasil)) {
    $hasil = "Prediksi Gagal";
}

    $model = new \App\Models\PredictionModel();

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