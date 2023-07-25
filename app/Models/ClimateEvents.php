<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClimateEvents extends Model
{
    use HasFactory;
    protected $table = 'climate_events';
    protected $fillable = [
        'event_date',
        'event_location',
        'event_description',
    ];
}
