<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'taskname' => 'Cleaning Service',
            'project' => 'Mesin 342',
            'startdate' => '2 November 2022',
            'duedate' => '5 November 2022',
            'status' => 'Progres',
        ]);
    }
}
