<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidaysTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('holidays', function (Blueprint $table) {
      //
      $table->id();
      $table->string('to')->nullable();
      $table->string('from')->nullable();
      $table->date('start_date')->nullable();
      $table->date('end_date')->nullable();
      $table->float('price')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('holidays');
  }
}
