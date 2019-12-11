<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmpleadoToDepartamentosTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::table('departamentos', function (Blueprint $table) {
      $table->unsignedBigInteger('jefe')->nullable();
      $table->foreign('jefe')->references('id')->on('empleados');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::table('departamentos', function (Blueprint $table) {
      //
    });
  }
}
