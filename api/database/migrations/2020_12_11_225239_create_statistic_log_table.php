<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatisticLogTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('statistic_log', function (Blueprint $table) {
      $table->id();
      $table->enum('search_resource', ['people', 'films']);
      $table->string('search_term');
      $table->integer('execution_time_in_milliseconds')->nullable();
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
    Schema::dropIfExists('statistic_log');
  }
}
