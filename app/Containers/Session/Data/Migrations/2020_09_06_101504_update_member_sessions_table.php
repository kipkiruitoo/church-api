<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateMemberSessionsTable extends Migration
{

  /**
   * Run the migrations.
   */
  public function up()
  {
    Schema::table('member_session', function (Blueprint $table) {

      $table->integer('seat_id');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down()
  {
    Schema::dropColumn('seat_id');
  }
}
