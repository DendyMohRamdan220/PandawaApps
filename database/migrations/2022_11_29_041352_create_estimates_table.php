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
        Schema::create('estimates', function (Blueprint $table) {
            $table->id();
            $table->string('estimate_number');
            $table->date ('valid_till');
            $table->enum('currency', ['USD ($)', 'IDR (Rp)', 'GBP (£)', 'EUR (€)']);
            $table->enum('choose_client', ['Zachry', 'Fauziah', 'Annisa']);
            $table->enum('select_product', ['Jasa', 'Elektronik']);
            $table->double('quantity');
            $table->double('unit_price');
            $table->double('amount');
            $table->double('total');
            $table->enum('status', ['Accepted', 'Waiting', 'Decline']);

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
        Schema::dropIfExists('estimates');
    }
};
