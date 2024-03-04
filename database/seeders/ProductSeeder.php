<?php

namespace Database\Seeders;

use App\Models\Brand;
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
            ->hasAttached(MediaFactory::new()->count(5))
            ->afterCreating(function (Product $product) {
                $featuredMedia = $product->media()->first();
                $featuredMedia->pivot->is_featured = true;
                $featuredMedia->pivot->save();

                $brand = Brand::factory()->create();
                $product->brand_id = $brand->id;
                $product->save();

                $category = Category::factory()->create();
                $product->category_id = $category->id;
                $product->save();

            })
            ->create();
    }
}
