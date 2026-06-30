<?php

namespace App\Models;

use CodeIgniter\Model;

class WeatherModel extends Model
{
    protected $table = 'weather_data';

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'tanggal',
        'suhu',
        'kelembaban',
        'tekanan_udara',
        'kecepatan_angin',
        'curah_hujan',
        'hujan',
        'potensi_banjir'
    ];
}