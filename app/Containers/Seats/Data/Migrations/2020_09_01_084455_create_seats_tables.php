<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeatsTables extends Migration
{

  /**
   * Run the migrations.
   */
  public function up()
  {
    Schema::create('seats', function (Blueprint $table) {

      $table->increments('id');
      $table->string('name');
      $table->bigInteger('church_id');
      $table->bigInteger('venue_id');
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down()
  {
    Schema::dropIfExists('seats');
  }
}
