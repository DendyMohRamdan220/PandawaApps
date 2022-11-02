<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attendances')->insert([
            'department' => 'IRS',
            'location' => 'indonesia',
            'date' => '2 November 2022',
            'project' => 'Mam',
            'task' => 'Mim',
            'description' => 'Hadir',
            'clockin' => '12:00',
            'clockout' => '17:00',
        ]);
    }
}
