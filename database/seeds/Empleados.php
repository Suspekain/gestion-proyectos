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
      DB::table('empleados')->insert([
        'nombre' => Str::random(10),
        'apellido' => Str::random(15),
        'email' => 'email@domain.com',
        'telefono'  => rand(600000000,999999999),
        'departamento_id' => rand(1,5)
      ]);
      factory(App\Empleado::class)->create();
    }
  }
}
