<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('patient', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id')->unique();
            $table->string('name');
            $table->string('NIK', 16);
            $table->date('date_of_birth');
            $table->text('address');
            $table->string('phone_number', 16);
            $table->string('gender')->default('male');
            $table->text('allergies')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('patient');
    }
};
