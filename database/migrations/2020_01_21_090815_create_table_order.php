<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pets_petId');
            $table->integer('quantity');
            $table->dateTime('shipDate',0);
            $table->string('status');
            $table->enum('Order Status', ['placed', 'approved', 'delivered']); 
            $table->boolean('complete')->default(0);
            $table->timestamps();
            $table->foreign('pets_petId')->references('petId')->on('pets');
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
        Schema::dropIfExists('orders');
    }
}
