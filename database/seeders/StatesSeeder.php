<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [

            ['name' => 'Maharashtra', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Karnataka', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Tamil Nadu', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Delhi', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Uttar Pradesh', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Gujarat', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Rajasthan', 'country_id' => 1, 'status' => '1'],
            ['name' => 'West Bengal', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Andhra Pradesh', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Bihar', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Madhya Pradesh', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Odisha', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Kerala', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Haryana', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Punjab', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Chhattisgarh', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Jharkhand', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Uttarakhand', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Himachal Pradesh', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Goa', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Sikkim', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Arunachal Pradesh', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Nagaland', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Manipur', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Mizoram', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Tripura', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Meghalaya', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Assam', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Nagaland', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Andaman and Nicobar Islands', 'country_id' => 1, 'status' => '1'],
            ['name' => 'Lakshadweep', 'country_id' => 1, 'status' => '1'],

            ['name' => 'California', 'country_id' => 2, 'status' => '1'],
            ['name' => 'Texas', 'country_id' => 2, 'status' => '1'],
            ['name' => 'Florida', 'country_id' => 2, 'status' => '1'],
            ['name' => 'New York', 'country_id' => 2, 'status' => '1'],
            ['name' => 'Illinois', 'country_id' => 2, 'status' => '1'],

            ['name' => 'Ontario', 'country_id' => 3, 'status' => '1'],
            ['name' => 'Quebec', 'country_id' => 3, 'status' => '1'],
            ['name' => 'British Columbia', 'country_id' => 3, 'status' => '1'],
            ['name' => 'Alberta', 'country_id' => 3, 'status' => '1'],
            ['name' => 'Manitoba', 'country_id' => 3, 'status' => '1'],

            ['name' => 'England', 'country_id' => 4, 'status' => '1'],
            ['name' => 'Scotland', 'country_id' => 4, 'status' => '1'],
            ['name' => 'Wales', 'country_id' => 4, 'status' => '1'],
            ['name' => 'Northern Ireland', 'country_id' => 4, 'status' => '1'],

            ['name' => 'New South Wales', 'country_id' => 5, 'status' => '1'],
            ['name' => 'Victoria', 'country_id' => 5, 'status' => '1'],
            ['name' => 'Queensland', 'country_id' => 5, 'status' => '1'],
            ['name' => 'South Australia', 'country_id' => 5, 'status' => '1'],
            ['name' => 'Western Australia', 'country_id' => 5, 'status' => '1'],
        ];

             DB::table('states')->insert($states);
    }
}
