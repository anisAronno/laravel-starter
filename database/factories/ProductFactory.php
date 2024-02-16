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
            'title'             => $this->faker->sentence(3),
            'short_description' => $this->faker->paragraph(2),
            'long_description'  => $this->faker->paragraph(5),
            'is_featured'       => $this->faker->numberBetween(0, 1),
            'has_variation'     => $this->faker->numberBetween(0, 1),
            'status'            => Status::PUBLISHED,
        ];
    }
}
