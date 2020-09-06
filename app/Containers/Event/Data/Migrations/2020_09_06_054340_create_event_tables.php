<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventTables extends Migration
{

  /**
   * Run the migrations.
   */
  public function up()
  {
    Schema::create('events', function (Blueprint $table) {

      $table->increments('id');
      $table->string('name');
      $table->date('event_date');
      $table->time('start_time');
      $table->time('end_time');
      $table->integer('organization_id');
      $table->integer('user_id');
      $table->integer('created_by');
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down()
  {
    Schema::dropIfExists('events');
  }
}
