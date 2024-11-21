<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            ['name' => 'India', 'status' => '1'],
            ['name' => 'United States', 'status' => '1'],
            ['name' => 'Canada', 'status' => '1'],
            ['name' => 'United Kingdom', 'status' => '1'],
            ['name' => 'Australia', 'status' => '1'],
        ];

        DB::table('countries')->insert($countries);
    }
}
