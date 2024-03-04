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
        // // Create 10 brands with attached media
        // Brand::factory()
        //     ->count(10)
        //     ->hasAttached(MediaFactory::new()->count(1))
        //     ->afterCreating(function (Brand $brand) {
        //         $featuredMedia = $brand->media()->first();
        //         $featuredMedia->pivot->is_featured = true;
        //         $featuredMedia->pivot->save();
        //     })
        //     ->create();

        // // Create 10 categories with attached media and associate products with brands
        // Category::factory()
        //     ->count(10)
        //     ->hasAttached(MediaFactory::new()->count(5))
        //     ->afterCreating(function (Category $category) {
        //         $featuredMedia = $category->media()->first();
        //         $featuredMedia->pivot->is_featured = true;
        //         $featuredMedia->pivot->save();
        //     })
        //     ->has(
        //         Product::factory()
        //             ->count(10)
        //             ->hasAttached(MediaFactory::new()->count(5))
        //             ->afterCreating(function (Product $product) {
        //                 $featuredMedia = $product->media()->first();
        //                 $featuredMedia->pivot->is_featured = true;
        //                 $featuredMedia->pivot->save();

        //                 // Randomly assign a brand to each product
        //                 $product->brand_id = Brand::inRandomOrder()->first()->id;
        //                 $product->save();
        //             }),
        //         'products',
        //     )
        //     ->create();

        Category::factory()
            ->count(10)
            ->hasAttached(MediaFactory::new()->count(1))
            ->afterCreating(function (Category $category) {
                $featuredMedia = $category->media()->first();
                $featuredMedia->pivot->is_featured = true;
                $featuredMedia->pivot->save();
            })
            ->create();
    }
}
