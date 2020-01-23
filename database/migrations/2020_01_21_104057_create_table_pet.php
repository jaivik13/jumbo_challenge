<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->string('category_name');               
            $table->string('pets_name');
            $table->string('photoUrls');             
            $table->unsignedBigInteger('tag_id');
            $table->string('tag_name');    
            $table->enum('Status', ['available', 'pending', 'sold']);
            $table->string('additionalMetadata');     
            $table->string('file');     
            $table->foreign('category_id')->references('id')->on('categorys');
            $table->foreign('tag_id')->references('id')->on('tags');
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
        Schema::dropIfExists('pet');
    }
}
