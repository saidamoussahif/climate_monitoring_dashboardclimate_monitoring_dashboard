<?php

namespace App\Http\Controllers;

use App\Models\ClimateEvents;

class ClimateEventsController extends Controller
{
    public function index()
    {
        $climateEvents = ClimateEvents::all();
        
        return response()->json($climateEvents);

    }

}
