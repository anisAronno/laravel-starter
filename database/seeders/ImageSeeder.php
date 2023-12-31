<?php

namespace Database\Seeders;

use AnisAronno\MediaGallery\Models\Image;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ImageSeeder extends Seeder
{
    protected $model = Image::class;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Image::truncate();
        Schema::enableForeignKeyConstraints();

        Image::factory()->count(50)->create();
    }
}
