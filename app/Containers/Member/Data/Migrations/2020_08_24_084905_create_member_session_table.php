<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMemberSessionTable extends Migration
{

  /**
   * Run the migrations.
   */
  public function up()
  {
    Schema::create('member_session', function (Blueprint $table) {

      $table->increments('id');
      $table->bigInteger('member_id');
      $table->bigInteger('session_id');
      $table->integer('temperature');
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down()
  {
    Schema::dropIfExists('member_session');
  }
}
