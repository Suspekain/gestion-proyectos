<?php

use Illuminate\Database\Seeder;

class Departamentos extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run() {
    for ($i=0; $i < 20; $i++) {
      DB::table('departamentos')->insert([
        'nombre' => Str::random(10)
      ]);
    }
  }
}
