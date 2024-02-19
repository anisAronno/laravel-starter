<?php

namespace Database\Seeders;

use App\Models\Brand;
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
            ->count(5)
            ->hasAttached(MediaFactory::new()->count(5))
            ->afterCreating(function (Category $category) {
                $featuredMedia = $category->media()->first();
                $featuredMedia->pivot->is_featured = true;
                $featuredMedia->pivot->save();
            })
            ->has(
                Product::factory()
                    ->count(5)
                    ->afterCreating(function (Product $product) {
                        $brand = Brand::factory()->create();
                        $product->brand_id = $brand->id;
                        $product->save();

                        $featuredMedia = $product->media()->first();
                        $featuredMedia->pivot->is_featured = true;
                        $featuredMedia->pivot->save();
                    })
                    ->has(
                        Variation::factory()
                            ->count(3)
                            ->hasAttached(MediaFactory::new()->count(5))
                            ->afterCreating(function (Variation $variation) {
                                $featuredMedia = $variation->media()->first();
                                $featuredMedia->pivot->is_featured = true;
                                $featuredMedia->pivot->save();
                            }),
                        'variations',
                    )
                    ->hasAttached(MediaFactory::new()->count(5)),
                'products',
            )
            ->create();
    }
}
