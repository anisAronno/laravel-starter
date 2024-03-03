<?php

namespace Database\Factories;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'short_description' => $this->faker->paragraph(2),
            'long_description' => $this->faker->paragraph(5),
            'is_featured' => $this->faker->numberBetween(0, 1),
            'price' => $this->faker->numberBetween(10, 1000),
            'original_price' => $this->faker->numberBetween(8, 900),
            'status' => Status::PUBLISHED,
        ];
    }
}
