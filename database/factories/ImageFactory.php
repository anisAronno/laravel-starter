<?php

namespace Database\Factories;

use AnisAronno\MediaGallery\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;
// use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\AnisAronno\MediaGallery\Models\Image>
 */
class ImageFactory extends Factory
{
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'url' => $this->faker->imageUrl(),
            'mimes' => 'images/png',
            'type' => 'images/png',
            'size' => '3 MB',
            'directory' => 'images',
            // 'owner_id' => User::factory(),
            // 'owner_type' =>  User::class
        ];
    }
}
