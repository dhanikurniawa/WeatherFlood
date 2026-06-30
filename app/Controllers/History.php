<?php

namespace App\Controllers;

use App\Models\PredictionModel;

class History extends BaseController
{
    public function index()
    {
        $model = new PredictionModel();

        $data['history'] = $model
            ->orderBy('id','DESC')
            ->findAll();

        return view('history/index',$data);
    }
}