<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_table', function(Blueprint $table){
            $table->id();
            $table->string('master_table_id')->nullable();
            $table->string('name');
            $table->string('value')->nullable();
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
        Schema::dropIfExists('master_table');
    }
}
