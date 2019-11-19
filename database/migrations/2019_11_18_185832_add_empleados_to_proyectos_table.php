<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmpleadosToProyectosTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up() {
    Schema::table('proyectos', function (Blueprint $table) {
      $table->unsignedBigInteger('empleado_responsable_id');
      $table->foreign('empleado_responsable_id')->references('id')->on('empleados');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::table('proyectos', function (Blueprint $table) {
      //
    });
  }
}
