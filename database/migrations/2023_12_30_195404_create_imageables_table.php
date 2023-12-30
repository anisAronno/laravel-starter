<?php

use AnisAronno\MediaGallery\Models\Image;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imageables', function (Blueprint $table) {
            $table->foreignIdFor(Image::class)->constrained()->cascadeOnDelete();
            $table->unsignedBigInteger('imageable_id');
            $table->string('imageable_type');
            $table->tinyInteger('is_featured')->default(0);
            $table->timestamps();

            $table->index(['imageable_id', 'imageable_type']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imageables');
    }
};
