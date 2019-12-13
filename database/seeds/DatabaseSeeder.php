<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Departamentos::class);
        $this->call(Empleados::class);
        $this->call(Proyectos::class);
        $this->call(EmpleadoProyectoTableSeeder::class);
        $this->call(Departamentos_jefe::class);

    }
}
