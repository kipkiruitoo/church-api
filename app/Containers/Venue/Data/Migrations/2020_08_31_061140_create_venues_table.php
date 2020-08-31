<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVenuesTable extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('location');
            $table->bigInteger('capacity');
            $table->bigInteger('church_id');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('venues');
    }
}
