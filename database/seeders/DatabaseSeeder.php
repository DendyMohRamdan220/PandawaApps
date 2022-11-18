<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // $this->call(TicketSeeder::class);
        // $this->call(TaskSeeder::class);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create(
            [
                'name' => 'Amar Fauzi',
                'email' => 'amar27fauzi@gmail.com',
                'password' => Hash::make('Admin12345'),
                'level' => '1',
            ],

            [
                'name' => 'Ditya Ryani Sardi',
                'email' => 'dityarys05@gmail.com',
                'password' => Hash::make('Employee12345'),
                'level' => '2',
            ],

            [
                'name' => 'Dendy Moh Ramdan',
                'email' => 'dendymochramdan@gmail.com',
                'password' => Hash::make('Client12345'),
                'level' => '3',
            ],

            [
                'name' => 'Annisa Zachry Fauziah',
                'email' => 'annisazachry246@gmail.com',
                'password' => Hash::make('Sales12345'),
                'level' => '4',
            ]
        );

    }
}
