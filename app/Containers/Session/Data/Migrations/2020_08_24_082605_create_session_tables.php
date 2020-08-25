<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSessionTables extends Migration
{

  /**
   * Run the migrations.
   */
  public function up()
  {
    Schema::create('sessions', function (Blueprint $table) {

      $table->bigIncrements('id');
      $table->bigInteger('church_id');
      $table->date('date');
      $table->time('start_time');
      $table->time('end_time');
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down()
  {
    Schema::dropIfExists('sessions');
  }
}
