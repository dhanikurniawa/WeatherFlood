<?php

namespace App\Controllers;

use App\Models\PredictionModel;
use App\Libraries\Services\FloodReport;

class History extends BaseController
{
    public function index()
    {
        $model = new PredictionModel();

        $report = new FloodReport();

        $data['reportMessage'] = $report->generateReport();

        $data['history'] = $model
            ->orderBy('id', 'DESC')
            ->findAll();

        return view('history/index', $data);
    }
}