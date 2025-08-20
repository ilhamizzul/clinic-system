<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_profile', function (Blueprint $table) {
            $table->string('id_profile')->primary();
            $table->unsignedBigInteger('id_user');
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->text('bio')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('license')->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profile');
    }
};
