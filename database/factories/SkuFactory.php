<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sku>
 */
class SkuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => fake()->regexify('[A-Z]{5}[0-4]{3}'),
            'regular_price' => fake()->randomFloat('2', 0, 9),
            'selling_price' => fake()->randomFloat('2', 0, 9),
        ];
    }
}
