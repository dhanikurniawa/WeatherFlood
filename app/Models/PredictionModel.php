<?php

namespace App\Models;

use CodeIgniter\Model;

class PredictionModel extends Model
{
    protected $table = 'prediction_history';

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'tanggal',
        'suhu',
        'kelembaban',
        'curah_hujan',
        'hasil'
    ];
}