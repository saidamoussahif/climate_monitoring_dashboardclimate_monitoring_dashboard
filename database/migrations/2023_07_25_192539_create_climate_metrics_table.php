<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClimateMetricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('climate_metrics', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('global_average_temperature');
            $table->string('sea_level_rise');
            $table->string('CO2_levels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('climate_metrics');
    }
}
