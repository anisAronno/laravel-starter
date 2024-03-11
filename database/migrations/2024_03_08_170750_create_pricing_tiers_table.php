<?php

use App\Models\Sku;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pricing_tiers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Sku::class)->constrained()->cascadeOnDelete();
            $table->json('attribute_options_combination');
            $table->string('weight')->nullable()->comment('kg');
            $table->json('dimensions')->nullable()->comment('Length, Width, Height');
            $table->decimal('regular_price')->nullable();
            $table->decimal('selling_price')->nullable();
            $table->integer('quantity')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricing_tiers');
    }
};
