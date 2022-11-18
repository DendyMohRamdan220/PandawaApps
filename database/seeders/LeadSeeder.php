<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('leads')->insert([
            'leads_name' => 'Annisa Zachry Fauziah',
            'leads_email' => 'annisazachry246@gmail.com',
            'mobile_phone' => '08213214321',
            'leads_agent' => 'Ditya Ryani Sardi',
            'status' => 'Inprogress',
            'next_follow_up' => 'Yes',
            'company_name' => 'Indorama Corporation',
            'website' => 'www.indorama.com',
            'office_phone' => '02140321',
            'city' => 'Purwakarta',
            'state' => 'Jawa Barat',
            'country' => 'Indonesia',
            'postal_code' => '41152',
            'address' => 'Kembang Kuning Purwakarta Jawa Barat'
        ]);
    }
}
