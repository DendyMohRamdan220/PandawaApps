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
            $table->string('leads_name');
            $table->date ('valid_till');
            $table->enum('currency', ['IDR', 'USD', 'EUR']);
            $table->enum('select_product', ['Jasa', 'Elektronik']);
            $table->longText('description');
            $table->double('quantity');
            $table->double('unit_price');
            $table->string('filename');
            $table->double('subtotal');
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
        Schema::dropIfExists('proposals');
    }
};