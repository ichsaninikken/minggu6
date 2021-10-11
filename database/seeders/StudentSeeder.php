<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim' => '2031710011',
            'name' => 'Ichsani Nikken Rahmawati',
            'class' => 'MI2E',
            'departement' => 'JTI',
            'phone_number' => '082264052082',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710103',
            'name' => 'Irva Putri Finisha',
            'class' => 'MI2E',
            'departement' => 'JTI',
            'phone_number' => '085894279520',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710036',
            'name' => 'Irvi Ariefatul Julia Putri',
            'class' => 'MI2E',
            'departement' => 'JTI',
            'phone_number' => '081335098272',
        ]);
    }
}
