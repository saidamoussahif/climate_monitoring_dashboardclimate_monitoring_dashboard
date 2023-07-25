<?php



use Inertia\Inertia;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
   return Inertia::render("Dashboard");
});

Route::get('/climate-events', function () {
   return Inertia::render("ClimateEvents");
});
