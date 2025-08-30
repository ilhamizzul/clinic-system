<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsuranceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('master_health_insurance')->insert([
            [
                'insurance_name' => 'BPJS',
                'contact_info' => 'contact@healthinsurancea.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'insurance_name' => 'Prudential',
                'contact_info' => 'contact@healthinsuranceb.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'insurance_name' => 'AXA',
                'contact_info' => 'contact@healthinsurancec.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'insurance_name' => 'Allianz',
                'contact_info' => 'contact@healthinsuranced.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
