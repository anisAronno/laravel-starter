<?php

namespace Database\Seeders;

use App\Models\AttributeOption;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Sku;
use Database\Factories\MediaFactory;
use Illuminate\Database\Seeder;
use App\Models\PricingTier;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::factory()
            ->count(100)
            ->has(
                Sku::factory()
                    ->count(3)
                    ->afterCreating(function (Sku $sku) {
                        $attributeOptions = AttributeOption::inRandomOrder()->take(2)->get();
                        $sku->attributeOptions()->attach($attributeOptions->pluck('id')->toArray());

                        PricingTier::create([
                            'sku_id' => $sku->id,
                            'attribute_options_combination' => json_encode($attributeOptions->pluck('id')->toArray()),
                            'selling_price' => rand(1000, 5000),
                        ]);

                        $attributeOptions2 = AttributeOption::inRandomOrder()->take(2)->get();

                        PricingTier::create([
                            'sku_id' => $sku->id,
                            'attribute_options_combination' => json_encode($attributeOptions2->pluck('id')->toArray()),
                            'selling_price' => rand(1000, 5000),
                        ]);
                    }),
            )
            ->has(MediaFactory::new()->count(5))
            ->afterCreating(function (Product $product) {
                $featuredMedia = $product->media()->first();
                $featuredMedia->pivot->is_featured = true;
                $featuredMedia->pivot->save();

                $product->brand_id = Brand::inRandomOrder()->first()->id;
                $product->category_id = Category::inRandomOrder()->first()->id;
                $product->save();
            })
            ->create();
    }
}
