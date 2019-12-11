<?php

use Illuminate\Database\Seeder;

class Departamentos_jefe extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
      for ($i=0; $i < 5; $i++) {
        DB::table('departamentos')->insert([
          'jefe' => rand(1,20)
        ]);
      }
    }
}
