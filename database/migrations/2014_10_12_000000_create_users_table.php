<?php

use App\Enums\UserRole;
use App\Enums\UserStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username', 100)->unique();
            $table->string('phone', 50)->unique()->nullable();
            $table->string('image')->nullable();
            $table->string('email', 100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('api_token', 100)->unique();
            $table->string('password');
            $table->string('role', 50)->default(UserRole::CUSTOMER->value);
            $table->string('gender', 50)->nullable();
            $table->string('status', 50)->default(UserStatus::ACTIVE->value);
            $table->string('ip', 50)->nullable();
            $table->string('latitude', 255)->nullable();
            $table->string('longitude', 255)->nullable();
            $table->string('time_zone', 50)->default('Asia/Dhaka');
            $table->string('language', 50)->default('en');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
