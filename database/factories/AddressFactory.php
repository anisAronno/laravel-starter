<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'address' => fake()->address(),
            'province' => fake()->city(),
            'city' => fake()->city(),
            'area' => fake()->city(),
            'country' => fake()->country(),
            'type' => fake()->randomElement(['shipping', 'billing']),
        ];
    }
}
