<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PatientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('patient')->insert([
            [
            'patient_id' => 'P' . now()->format('ymd') . strtoupper(Str::random(6)),
            'name' => 'John Doe',
            'NIK' => '1234567890123456',
            'date_of_birth' => '1990-01-01',
            'address' => '123 Main St',
            'phone_number' => '08123456789',
            'gender' => 'Male',
            'allergies' => 'None',
            ],
            [
            'patient_id' => 'P' . now()->format('ymd') . strtoupper(Str::random(6)),
            'name' => 'Jane Smith',
            'NIK' => '2345678901234567',
            'date_of_birth' => '1985-05-15',
            'address' => '456 Oak Ave',
            'phone_number' => '08234567890',
            'gender' => 'Female',
            'allergies' => 'Penicillin',
            ],
            [
            'patient_id' => 'P' . now()->format('ymd') . strtoupper(Str::random(6)),
            'name' => 'Michael Johnson',
            'NIK' => '3456789012345678',
            'date_of_birth' => '1978-09-23',
            'address' => '789 Pine Rd',
            'phone_number' => '08345678901',
            'gender' => 'Male',
            'allergies' => 'Peanuts',
            ],
            [
            'patient_id' => 'P' . now()->format('ymd') . strtoupper(Str::random(6)),
            'name' => 'Emily Davis',
            'NIK' => '4567890123456789',
            'date_of_birth' => '1992-12-11',
            'address' => '321 Maple Ln',
            'phone_number' => '08456789012',
            'gender' => 'Female',
            'allergies' => 'None',
            ],
            [
            'patient_id' => 'P' . now()->format('ymd') . strtoupper(Str::random(6)),
            'name' => 'William Brown',
            'NIK' => '5678901234567890',
            'date_of_birth' => '1980-03-30',
            'address' => '654 Cedar St',
            'phone_number' => '08567890123',
            'gender' => 'Male',
            'allergies' => 'Aspirin',
            ],
            [
            'patient_id' => 'P' . now()->format('ymd') . strtoupper(Str::random(6)),
            'name' => 'Olivia Wilson',
            'NIK' => '6789012345678901',
            'date_of_birth' => '1995-07-19',
            'address' => '987 Birch Blvd',
            'phone_number' => '08678901234',
            'gender' => 'Female',
            'allergies' => 'Seafood',
            ],
        ]);
    }
}
