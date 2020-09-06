<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateUsersTable extends Migration
{

  /**
   * Run the migrations.
   */
  public function up()
  {
    Schema::table('users', function (Blueprint $table) {
      $table->string('qr_string')->nullable();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down()
  {
    Schema::dropColumn('qr_string');
  }
}
