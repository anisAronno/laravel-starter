<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
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
                $featuredMedia = $category->media()->first();
                $featuredMedia->pivot->is_featured = true;
                $featuredMedia->pivot->save();
            })
            ->has(
                Product::factory()
                    ->count(10)
                    ->hasAttached(MediaFactory::new()->count(5))
                    ->afterCreating(function (Product $product) {
                        $featuredMedia = $product->media()->first();
                        $featuredMedia->pivot->is_featured = true;
                        $featuredMedia->pivot->save();

                        $brand = Brand::factory()->create();
                        $product->brand_id = $brand->id;
                        $product->save();
                    }),
                'products',
            )
            ->create();
    }
}
