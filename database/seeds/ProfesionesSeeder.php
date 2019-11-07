<?php

use \App\Profesiones;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfesionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profesiones::create(['titulo'=>'Desarrollador Back-End']);

        Profesiones::create(['titulo'=>'Desarrollador Front-End']);

        Profesiones::create(['titulo'=>'Desarrollador Web']);

        Profesiones::create(['titulo'=>'Arquitect@']);

        Profesiones::create(['titulo'=>'Music@']);

    }
}
