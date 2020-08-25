<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChurchTables extends Migration
{

  /**
   * Run the migrations.
   */
  public function up()
  {
    Schema::create('churches', function (Blueprint $table) {

      $table->bigIncrements('id');
      $table->string('name')->nullable();
      $table->string('location')->nullable();
      $table->bigInteger('seats')->nullable();
      // $table->string('platform')->nullable();
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down()
  {
    Schema::dropIfExists('churches');
  }
}
