<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateMembersTable extends Migration
{

  /**
   * Run the migrations.
   */
  public function up()
  {
    Schema::table('members', function (Blueprint $table) {


      $table->string('qr_string');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down()
  {
    Schema::dropColumn('');
  }
}
