<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClimateEventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'event_date' => $this->faker->date(),
                'event_location' => $this->faker->city(),
                'event_description' => $this->faker->text(),
        ];
    }
}