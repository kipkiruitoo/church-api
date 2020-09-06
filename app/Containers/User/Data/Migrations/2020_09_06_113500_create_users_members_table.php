<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersMembersTable extends Migration
{

  /**
   * Run the migrations.
   */
  public function up()
  {
    Schema::create('user_session', function (Blueprint $table) {

      $table->increments('id');
      $table->integer('user_id');
      $table->integer('session_id');
      $table->integer('temperature');
      $table->integer('seat_id');
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down()
  {
    Schema::dropIfExists('user_session');
  }
}
