<?php

namespace App\Controllers;

use App\Models\WeatherModel;

class Visualization extends BaseController
{
    public function index()
    {
        $model = new WeatherModel();

        $data['weather'] = $model
            ->orderBy('tanggal', 'DESC')
            ->findAll(30);

        return view('visualization/index', $data);
    }
}