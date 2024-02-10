<?php

namespace Database\Seeders;

use App\Models\Category;
use Database\Factories\MediaFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()
            ->count(20)
            ->hasAttached(MediaFactory::new()->count(5))
            ->afterCreating(function (Category $category) {
                $featuredMedia = $category->media()->first();
                $featuredMedia->pivot->is_featured = true;
                $featuredMedia->pivot->save();
            })
            ->create();
    }
}
