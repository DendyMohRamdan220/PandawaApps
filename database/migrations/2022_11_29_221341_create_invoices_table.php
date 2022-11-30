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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number');
            $table->date ('invoice_date');
            $table->date ('due_date');
            $table->enum('currency', ['USD ($)', 'IDR (Rp)', 'GBP (£)', 'EUR (€)']);
            $table->enum('choose_client', ['Zachry', 'Fauziah', 'Annisa']);
            $table->enum('select_project', ['Project 1', 'Project 2']);
            $table->string('shipping_address');
            $table->double('quantity');
            $table->double('unit_price');
            $table->double('amount');
            $table->double('total');
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
        Schema::dropIfExists('invoices');
    }
};
