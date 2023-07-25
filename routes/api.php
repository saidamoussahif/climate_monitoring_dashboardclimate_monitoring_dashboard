<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClimateMetricsController;
use App\Http\Controllers\ClimateEventsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/climate-metrics', [ClimateMetricsController::class, 'index']);
Route::get('/climate-events', [ClimateEventsController::class, 'index']);