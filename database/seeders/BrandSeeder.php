<?php

namespace Database\Seeders;

use App\Models\Brand;
use Database\Factories\MediaFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::factory()
            ->count(10)
            ->hasAttached(MediaFactory::new()->count(1))
            ->afterCreating(function (Brand $brand) {
                $featuredMedia = $brand->media()->first();
                $featuredMedia->pivot->is_featured = true;
                $featuredMedia->pivot->save();
            })
            ->create();
    }
}
