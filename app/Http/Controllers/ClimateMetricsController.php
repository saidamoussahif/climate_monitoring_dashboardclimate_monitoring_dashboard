<?php

namespace App\Http\Controllers;

use App\Models\ClimateMetrics;


class ClimateMetricsController extends Controller
{
    public function index()
    {
        $climateMetrics = ClimateMetrics::all();
        return response()->json($climateMetrics);
    }}

