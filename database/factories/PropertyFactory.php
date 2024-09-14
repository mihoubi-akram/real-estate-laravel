<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'surface' => $this->faker->numberBetween(50, 300),
            'rooms' => $this->faker->numberBetween(1, 5),
            'bedrooms' => $this->faker->numberBetween(1, 2),
            'floor' => $this->faker->numberBetween(1, 4),
            'price' => $this->faker->numberBetween(100000, 500000),
            'city' => $this->faker->city,
            'address' => $this->faker->streetAddress,
            'postal_code' => $this->faker->postcode,
            'sold' => $this->faker->boolean,
        ];
    }
}
