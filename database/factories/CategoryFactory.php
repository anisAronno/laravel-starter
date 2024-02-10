<?php

namespace Database\Factories;

use App\Enums\Status;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(2),
            'is_featured' => $this->faker->numberBetween(0, 1),
            'status' => Status::PUBLISHED,
            'parent_id' => $this->faker->randomElement(Category::pluck('id')->toArray()),
        ];
    }
}
