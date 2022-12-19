<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Leads;
use App\Models\Products;
use App\Models\project;
use App\Models\Task;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
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
            'address' => 'Purwakarta',
            'mobile' => '089855476509',
            'gender' => 'Laki-laki',
        ]);

        // Employee >>
        User::create([
            'name' => 'Ditya Ryani Sardi',
            'email' => 'dityarys05@gmail.com',
            'password' => Hash::make('Employee12345'),
            'level' => 'Employee',
            'address' => 'Purwakarta',
            'mobile' => '087779866341',
            'gender' => 'Perempuan',
        ]);
        User::create([
            'name' => 'Wanti Istiqomah',
            'email' => 'wanti001@gmail.com',
            'password' => Hash::make('Employee123451'),
            'level' => 'Employee',
            'address' => 'Purwakarta',
            'mobile' => '08891928861',
            'gender' => 'Perempuan',
        ]);
        User::create([
            'name' => 'Nursita Setyawati',
            'email' => 'sita002@gmail.com',
            'password' => Hash::make('Employee123452'),
            'level' => 'Employee',
            'address' => 'Purwakarta',
            'mobile' => '0877766532398',
            'gender' => 'Perempuan',
        ]);
        User::create([
            'name' => 'Ayu Siti Rohmah',
            'email' => 'ayu003@gmail.com',
            'password' => Hash::make('Employee123453'),
            'level' => 'Employee',
            'address' => 'Purwakarta',
            'mobile' => '082130068997',
            'gender' => 'Perempuan',
        ]);
        User::create([
            'name' => 'Adila Alaina Risqi',
            'email' => 'adila004@gmail.com',
            'password' => Hash::make('Employee123454'),
            'level' => 'Employee',
            'address' => 'Purwakarta',
            'mobile' => '082147853455',
            'gender' => 'Perempuan',
        ]);

        // Client >>
        User::create([
            'name' => 'Dendy Moh Ramdan',
            'email' => 'dendymochramdan@gmail.com',
            'password' => Hash::make('Client12345'),
            'level' => 'Client',
            'address' => 'Purwakarta',
            'mobile' => '085846682507',
            'gender' => 'Laki-laki',
        ]);
        User::create([
            'name' => 'Nurul Huda',
            'email' => 'huda001@gmail.com',
            'password' => Hash::make('Client123451'),
            'level' => 'Client',
            'address' => 'Purwakarta',
            'mobile' => '085903683912',
            'gender' => 'Laki-laki',
        ]);
        User::create([
            'name' => 'Muhamad Algi Fachruli',
            'email' => 'queenlyva@gmail.com',
            'password' => Hash::make('Client12345q'),
            'level' => 'Client',
            'address' => 'Purwakarta',
            'mobile' => '085797553650',
            'gender' => 'Laki-laki',
        ]);
        User::create([
            'name' => 'Farid Nabil',
            'email' => 'farid002@gmail.com',
            'password' => Hash::make('Client123452'),
            'level' => 'Client',
            'address' => 'Purwakarta',
            'mobile' => '087786672467',
            'gender' => 'Laki-laki',
        ]);
        User::create([
            'name' => 'Muhamad Azis',
            'email' => 'Azis003@gmail.com',
            'password' => Hash::make('Client123453'),
            'level' => 'Client',
            'address' => 'Purwakarta',
            'mobile' => '082249623853',
            'gender' => 'Laki-laki',
        ]);
        User::create([
            'name' => 'Muhamad Dwiki Yudistira',
            'email' => 'dwiki004@gmail.com',
            'password' => Hash::make('Client123454'),
            'level' => 'Client',
            'address' => 'Purwakarta',
            'mobile' => '089627286733',
            'gender' => 'Laki-laki',
        ]);
        User::create([
            'name' => 'Annisa Zachry Fauziah',
            'email' => 'annisazachry246@gmail.com',
            'password' => Hash::make('Sales123454'),
            'level' => 'Sales',
            'address' => 'Purwakarta',
            'mobile' => '089658509968',
            'gender' => 'Perempuan',
        ]);

        // Data Leads >>
        Leads::create([
            'leads_name' => 'Dendy Moh Ramdan',
            'leads_email' => 'dendymochramdan@gmail.com',
            'office_phone' => ('08779866789'),
            'status' => 'Pending',
            'next_follow_up' => 'Yes',
            'company_name' => 'Pandawa Mandiri',
            'website' => 'www.pandawamandiri.com',
            'mobile_phone' => '085867787809',
            'city' => 'Purwakarta',
            'state' => 'Jawa Barat',
            'country' => 'Indonesia',
            'postal_code' => '411831',
            'address' => 'Jl.Pahlawan',
        ]);
        Leads::create([
            'leads_name' => 'Muhamad Algi Fachruli',
            'leads_email' => 'queenlyva@gmail.com',
            'office_phone' => ('08779899876'),
            'status' => 'Pending',
            'next_follow_up' => 'Yes',
            'company_name' => 'Ilustrasi Manga',
            'website' => 'www.ilustrasimanga.com',
            'mobile_phone' => '085856674532',
            'city' => 'Purwakarta',
            'state' => 'Jawa Barat',
            'country' => 'Indonesia',
            'postal_code' => '411835',
            'address' => 'Jl.sadang',
        ]);

        // Data Project >>
        project::create([
            'projectname' => 'Angine F1',
            'user_id' => '2',
            'deadline' => Carbon::parse('2022-12-20'),
            'user_id1' => 'Dendy Moh Ramdan',
            'status' => 'Order',
        ]);
        project::create([
            'projectname' => 'Angine F2',
            'user_id' => '4',
            'deadline' => Carbon::parse('2022-12-25'),
            'user_id1' => 'Muhamad Algi Fachruli',
            'status' => 'Order',
        ]);

        // Data task >>
        Task::create([
            'taskname' => 'Angine F1',
            'project_id' => '1',
            'user_id' => '2',
            'startdate' => Carbon::parse('2022-12-17'),
            'duedate' => Carbon::parse('2022-12-20'),
            'status' => 'Order',
        ]);
        Task::create([
            'taskname' => 'Angine F1',
            'project_id' => '2',
            'user_id' => '4',
            'startdate' => Carbon::parse('2022-12-17'),
            'duedate' => Carbon::parse('2022-12-25'),
            'status' => 'Order',
        ]);

        // Data Project >>
        Products::create([
            'name' => 'Maintance',
            'price' => '50000',
            'produk_kategori' => 'Jasa',
            'produk_sub_kategori' => 'Angine',
        ]);
        Products::create([
            'name' => 'Cleaning Service',
            'price' => '55000',
            'produk_kategori' => 'Jasa',
            'produk_sub_kategori' => 'Angine',
        ]);

        //Data Ticket >>
        Ticket::create([
            'ticket_subject' => 'Angine F1',
            'description' => 'Damage To Angine F1',
            'status' => 'Order',
        ]);
        Ticket::create([
            'ticket_subject' => 'Angine F2',
            'description' => 'Damage To Angine F2',
            'status' => 'Order',
        ]);
        Ticket::create([
            'ticket_subject' => 'Angine F3',
            'description' => 'Damage To Angine F3',
            'status' => 'Order',
        ]);
        Ticket::create([
            'ticket_subject' => 'Angine F4',
            'description' => 'Damage To Angine F4',
            'status' => 'Order',
        ]);
        Ticket::create([
            'ticket_subject' => 'Angine F5',
            'description' => 'Damage To Angine F5',
            'status' => 'Order',
        ]);
        Ticket::create([
            'ticket_subject' => 'Angine F6',
            'description' => 'Damage To Angine F6',
            'status' => 'Order',
        ]);

    }
}
