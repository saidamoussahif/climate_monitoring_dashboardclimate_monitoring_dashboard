<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClimateMetrics extends Model
{
    use HasFactory;
    protected $table = 'climate_metrics';
    protected $fillable = [
        'global_average_temperature',
        'sea_level_rise',
        'CO2_levels',
    ];
    
}
