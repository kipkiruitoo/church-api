<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateSessionsTable extends Migration
{

  /**
   * Run the migrations.
   */
  public function up()
  {
    Schema::table('sessions', function (Blueprint $table) {

      $table->integer('event_id');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down()
  {
    $table->dropColumn('event_id');
  }
}
