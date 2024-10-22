<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'car_model_id' => null,
            'carColor' => fake()->colorName(),
            'carNumber' => strtoupper($this->faker->lexify('???')) . $this->faker->numberBetween(1000, 9999),
            'distanceTraveled' => fake()->numberBetween(5000, 10000),
            'availableDate' => now(),
        ];
    }

    public function tenDaysAfterAvailable()
    {
        return $this->state([
            'availableDate' => now()->addDays(10),
        ]);
    }

    public function fiveDaysAfterAvailable()
    {
        return $this->state([
            'availableDate' => now()->addDays(5),
        ]);
    }
}
