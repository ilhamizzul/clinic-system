<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('patient_insurance_link', function (Blueprint $table) {
            $table->string('id_link')->primary();
            $table->string('id_patient');
            $table->string('id_insurance');
            $table->string('insurance_number');
            $table->date('effective_date');
            $table->date('expiration_date');
            $table->timestamps();

            $table->foreign('id_patient')->references('id_patient')->on('patient')->onDelete('cascade');
            $table->foreign('id_insurance')->references('id_insurance')->on('master_health_insurance')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('patient_insurance_link');
    }
};
