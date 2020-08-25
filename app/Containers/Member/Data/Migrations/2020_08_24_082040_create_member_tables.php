<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMemberTables extends Migration
{

  /**
   * Run the migrations.
   */
  public function up()
  {
    Schema::create('members', function (Blueprint $table) {

      $table->bigIncrements('id');
      $table->string('gender')->nullable();
      $table->bigInteger('phone')->nullable();
      $table->bigInteger('church_id')->nullable();
      $table->string('location')->nullable();
      $table->year('yob')->nullable();
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down()
  {
    Schema::dropIfExists('members');
  }
}
