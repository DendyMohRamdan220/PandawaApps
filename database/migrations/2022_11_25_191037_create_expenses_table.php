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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');
            $table->enum('currency', ['USD ($)', 'IDR (Rp)', 'GBP (£)', 'EUR (€)']);
            $table->double('unit_price');
            $table->date ('purchase_date');
            $table->enum('select_employee', ['A', 'B']);
            $table->bigInteger('project_id');
            $table->string('purchase_from');
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
        Schema::dropIfExists('expenses');
    }
};