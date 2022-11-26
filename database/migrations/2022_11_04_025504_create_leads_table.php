<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('leads_name');
            $table->string ('leads_email');
            $table->string('office_phone');
            $table->enum('choose_agent', ['Ditya Ryani Sardi', 'Dendy Moh Ramdan', 'Amar Fauzi']);
            $table->enum('status', ['Pending', 'Overview', 'Confirmed']);
            $table->enum('next_follow_up', ['yes', 'no']);
            $table->string('company_name');
            $table->string('website');
            $table->string('mobile_phone');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('postal_code');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leads');
    }
};
