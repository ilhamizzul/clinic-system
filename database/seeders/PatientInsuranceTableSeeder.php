<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientInsuranceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('patient_insurance_link')->insert([
            [
                'patient_id' => '1',
                'master_health_insurance_id' => '1',
                'insurance_number' => '123456789',
                'effective_date' => '2025-01-15',
                'expiration_date' => '2026-01-14',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'patient_id' => '1',
                'master_health_insurance_id' => '2',
                'insurance_number' => '987654321',
                'effective_date' => '2024-07-10',
                'expiration_date' => '2025-07-09',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'patient_id' => '2',
                'master_health_insurance_id' => '1',
                'insurance_number' => '555555555',
                'effective_date' => '2025-03-05',
                'expiration_date' => '2027-03-04',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'patient_id' => '2',
                'master_health_insurance_id' => '3',
                'insurance_number' => '444444444',
                'effective_date' => '2024-11-20',
                'expiration_date' => '2026-11-19',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'patient_id' => '3',
                'master_health_insurance_id' => '2',
                'insurance_number' => '333333333',
                'effective_date' => '2025-05-30',
                'expiration_date' => '2027-05-29',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'patient_id' => '3',
                'master_health_insurance_id' => '3',
                'insurance_number' => '222222222',
                'effective_date' => '2025-08-12',
                'expiration_date' => '2027-08-11',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'patient_id' => '4',
                'master_health_insurance_id' => '1',
                'insurance_number' => '111111111',
                'effective_date' => '2024-09-18',
                'expiration_date' => '2025-09-17',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
