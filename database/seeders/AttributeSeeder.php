<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\AttributeOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Attribute::factory()
            ->create(['name' => 'color'])
            ->attributeOptions()
            ->createMany([['value' => 'red'], ['value' => 'green'], ['value' => 'white'], ['value' => 'blue']]);

        Attribute::factory()
            ->create(['name' => 'size'])
            ->attributeOptions()
            ->createMany([['value' => 'xl'], ['value' => 'lg'], ['value' => 'sm'], ['value' => 'md']]);

        Attribute::factory()
            ->create(['name' => 'fabrics'])
            ->attributeOptions()
            ->createMany([['value' => 'cotton'], ['value' => 'polyester'], ['value' => 'silk']]);
    }
}
