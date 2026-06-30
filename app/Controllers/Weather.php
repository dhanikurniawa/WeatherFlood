<?php

namespace App\Controllers;

use App\Models\WeatherModel;

class Weather extends BaseController
{
    public function index()
    {
        $model = new WeatherModel();

        $data['weather'] = $model->findAll();

        return view('weather/index', $data);
    }

    public function create()
    {
        return view('weather/create');
    }

    public function store()
    {
        $model = new WeatherModel();

        $model->save([
            'tanggal' => $this->request->getPost('tanggal'),
            'suhu' => $this->request->getPost('suhu'),
            'kelembaban' => $this->request->getPost('kelembaban'),
            'curah_hujan' => $this->request->getPost('curah_hujan'),
            'potensi_banjir' => $this->request->getPost('potensi_banjir'),
        ]);

        return redirect()->to('/weather');
    }

    public function edit($id)
    {
        $model = new \App\Models\WeatherModel();

        $data['weather'] = $model->find($id);

        return view('weather/edit', $data);
    }

    public function update($id)
    {
        $model = new \App\Models\WeatherModel();

        $model->update($id, [
            'tanggal' => $this->request->getPost('tanggal'),
            'suhu' => $this->request->getPost('suhu'),
            'kelembaban' => $this->request->getPost('kelembaban'),
            'curah_hujan' => $this->request->getPost('curah_hujan'),
            'potensi_banjir' => $this->request->getPost('potensi_banjir'),
        ]);

        return redirect()->to('/weather');
    }
    public function delete($id)
    {
        $model = new \App\Models\WeatherModel();

        $model->delete($id);

        return redirect()->to('/weather');
    }

    public function import()
{
    $file = $this->request->getFile('file_csv');

    if ($file->isValid()) {

        $csv = array_map('str_getcsv', file($file->getTempName()));

        $model = new \App\Models\WeatherModel();

        unset($csv[0]); // hapus header

        foreach ($csv as $row) {

            $model->insert([
                'tanggal'          => $row[0],
                'suhu'             => $row[1],
                'kelembaban'       => $row[2],
                'tekanan_udara'    => $row[3],
                'kecepatan_angin'  => $row[4],
                'curah_hujan'      => $row[5],
                'hujan'            => $row[6],
                'potensi_banjir'   => $row[7],
            ]);
        }
    }

    return redirect()->to('/weather');
}
}