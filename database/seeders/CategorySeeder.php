<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Variation;
use Database\Factories\MediaFactory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()
            ->count(10)
            ->hasAttached(MediaFactory::new()->count(5))
            ->afterCreating(function (Category $category) {
                $featuredMedia                     = $category->media()->first();
                $featuredMedia->pivot->is_featured = true;
                $featuredMedia->pivot->save();
            })
            ->has(
                Product::factory()
                    ->count(20)
                    ->has(Variation::factory()->count(3), 'variations')
                    ->hasAttached(MediaFactory::new()->count(5))
                    ->afterCreating(function (Product $product) {
                        $featuredMedia                     = $product->media()->first();
                        $featuredMedia->pivot->is_featured = true;
                        $featuredMedia->pivot->save();
                    }),
                'products',
            )
            ->create();
    }
}
