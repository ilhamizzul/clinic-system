<?php

use App\Models\MasterHealthInsurance;
use App\Models\Patient;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('patient_insurance_link', function (Blueprint $table) {
            $table->string('link_id')->primary();
            $table->foreignIdFor(Patient::class);
            $table->foreignIdFor(MasterHealthInsurance::class);
            $table->string('insurance_number');
            $table->date('effective_date');
            $table->date('expiration_date');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('patient_insurance_link');
    }
};
