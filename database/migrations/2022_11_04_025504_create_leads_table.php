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
            $table->varchar('leads_name');
            $table->varchar('leads_email');
            $table->varchar('office_phone');
            $table->varchar('choose_agent');
            $table->enum('status', ['Inprogress', 'Done', 'Pending']);
            $table->enum('next_follow_up', ['yes', 'no']);
            $table->varchar('company_name');
            $table->varchar('website');
            $table->varchar('mobile_phone');
            $table->varchar('city');
            $table->varchar('state');
            $table->varchar('country');
            $table->varchar('postal_code');
            $table->text('address');
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
