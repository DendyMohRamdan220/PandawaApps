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

        // Admin >>
        User::create([
            'name' => 'Amar Fauzi',
            'email' => 'amar27fauzi@gmail.com',
            'password' => Hash::make('Admin12345'),
            'level' => 'Admin',
        ]);

        // Employee >>
        User::create([
            'name' => 'Ditya Ryani Sardi',
            'email' => 'dityarys05@gmail.com',
            'password' => Hash::make('Employee12345'),
            'level' => 'Employee',
        ]);
        User::create([
            'name' => 'Wanti Istiqomah',
            'email' => 'wanti001@gmail.com',
            'password' => Hash::make('Employee123451'),
            'level' => 'Employee',
        ]);
        User::create([
            'name' => 'Nursita Setyawati',
            'email' => 'sita002@gmail.com',
            'password' => Hash::make('Employee123452'),
            'level' => 'Employee',
        ]);
        User::create([
            'name' => 'Ayu Siti Rohmah',
            'email' => 'ayu003@gmail.com',
            'password' => Hash::make('Employee123453'),
            'level' => 'Employee',
        ]);
        User::create([
            'name' => 'Adila Alaina Risqi',
            'email' => 'adila004@gmail.com',
            'password' => Hash::make('Employee123454'),
            'level' => 'Employee',
        ]);

        // Client >>
        User::create([
            'name' => 'Dendy Moh Ramdan',
            'email' => 'dendymochramdan@gmail.com',
            'password' => Hash::make('Client12345'),
            'level' => 'Client',
        ]);
        User::create([
            'name' => 'Nurul Huda',
            'email' => 'huda001@gmail.com',
            'password' => Hash::make('Client123451'),
            'level' => 'Client',
        ]);
        User::create([
            'name' => 'Muhamad Algi Fachruli',
            'email' => 'queenlyva@gmail.com',
            'password' => Hash::make('Client12345q'),
            'level' => 'Client',
        ]);
        User::create([
            'name' => 'Farid Nabil',
            'email' => 'farid002@gmail.com',
            'password' => Hash::make('Client123452'),
            'level' => 'Client',
        ]);
        User::create([
            'name' => 'Muhamad Azis',
            'email' => 'Azis003@gmail.com',
            'password' => Hash::make('Client123453'),
            'level' => 'Client',
        ]);
        User::create([
            'name' => 'Muhamad Dwiki Yudistira',
            'email' => 'dwiki004@gmail.com',
            'password' => Hash::make('Client123454'),
            'level' => 'Client',
        ]);
        User::create([
            'name' => 'Annisa Zachry Fauziah',
            'email' => 'annisazachry246@gmail.com',
            'password' => Hash::make('Sales123454'),
            'level' => 'Sales',
        ]);
    }
}
