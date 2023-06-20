<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tour>
 */
class TourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startingDate = now()->addDays(rand(1, 30));
        $endingDate = $startingDate->copy()->addDays(rand(1, 10));
        return [
            'name' => fake()->text(20),
            'starting_date' => $startingDate,
            'ending_date' => $endingDate,
            'price' => fake()->randomFloat(2, 10, 999),
        ];
    }
}
