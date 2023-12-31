<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->nullable();
            $table->string('url', 255);
            $table->string('mimes', 50)->nullable();
            $table->string('type', 50)->nullable();
            $table->string('size', 50)->nullable();
            $table->string('directory', 100)->nullable();
            $table->unsignedBigInteger('owner_id')->nullable()->constrained()->nullOnDelete();
            $table->string('owner_type')->nullable();
            $table->timestamps();

            $table->index(['owner_id', 'owner_type', 'directory']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
};
