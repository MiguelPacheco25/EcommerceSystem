<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClothesTable extends Migration
{/**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clothes', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('color')->nullable();
            $table->string('amount')->nullable();
            $table->string('price');
            $table->string('categorie_id');
            $table->string('size_id');
            $table->string('value_one')->nullable();
            $table->string('value_two')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('clothes');
    }
}
