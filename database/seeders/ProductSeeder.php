<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Database\Factories\MediaFactory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()
            ->count(20)
            ->has(Category::factory()->count(2), 'categories')
            ->hasAttached(MediaFactory::new()->count(5))
            ->afterCreating(function (Product $product) {
                $featuredMedia                     = $product->media()->first();
                $featuredMedia->pivot->is_featured = true;
                $featuredMedia->pivot->save();
            })
            ->create();
    }
}
