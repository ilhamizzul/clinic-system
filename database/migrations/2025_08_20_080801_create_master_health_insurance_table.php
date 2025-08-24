<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('master_health_insurance', function (Blueprint $table) {
            $table->string('insurance_id')->primary();
            $table->string('insurance_name');
            $table->string('contact_info');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('master_health_insurance');
    }
};
