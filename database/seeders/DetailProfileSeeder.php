<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insert data ke table 
        DB::table('detail_profile_table_')->insert([
            'address' => 'Nganjuk',
            'nomor_tlp' => '08123456789',
            'ttl' => '2000-01-01',
            'foto' => 'foto.jpg',
        ]);
    }
}
