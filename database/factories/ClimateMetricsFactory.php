<?php

namespace Database\Factories;


use App\Models\ClimateMetrics;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClimateMetricsFactory extends Factory
{
    protected $model = ClimateMetrics::class;

    public function definition()
    {
        return [
            'global_average_temperature' => $this->faker->randomFloat(2, -30, 40),
            'sea_level_rise' => $this->faker->randomFloat(2, 0, 100),
            'CO2_levels' => $this->faker->randomFloat(2, 0, 100),

        ];
    }
}
