<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Tickets')->insert([
            'ticket_subject' => 'Angine A1',
            'description' => 'damage to the engine',
            'others' => 'Medium',
        ]);

    }
}
