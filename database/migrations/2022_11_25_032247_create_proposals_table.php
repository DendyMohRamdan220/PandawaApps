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
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->string('proposal_name');
            $table->bigInteger('leads_id');
            $table->date ('valid_till');
            $table->enum('currency', ['USD ($)', 'IDR (Rp)', 'GBP (£)', 'EUR (€)']);
            $table->bigInteger('products_id');
            $table->double('quantity');
            $table->double('price');
            $table->double('total')->nullable();
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
        Schema::dropIfExists('proposals');
    }
};
