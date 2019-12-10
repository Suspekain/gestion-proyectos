<?php

use Illuminate\Database\Seeder;
use App\Empleado;

class Empleados extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run() {
    for ($i=0; $i < 20; $i++) {
      factory(App\Empleado::class)->create();
    }
  }
}
