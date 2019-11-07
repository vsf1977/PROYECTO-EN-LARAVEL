<?php

use \App\Usuarios;
use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuarios::create(['nombre'=>'Vladimir Silva Fuentes',
            'correo'=>'vsf1977@gmail.com',
            'profesion_id'=>'3',
            'password'=>bcrypt('123456')]
        );

        Usuarios::create(['nombre'=>'Mericce Santiago Cepeda',
        'correo'=>'merysace@gmail.com',
        'profesion_id'=>'2',
        'password'=>bcrypt('987654')]
        );

        Usuarios::create(['nombre'=>'Sophie Catalina Silva Santiago',
        'correo'=>'sophie@gmail.com',
        'profesion_id'=>'4',
        'password'=>bcrypt('987654')]
        );

        Usuarios::create(['nombre'=>'Juan Carlos Gonzalez',
        'correo'=>'xxxjxxx@gmail.com',
        'profesion_id'=>'5',
        'password'=>bcrypt('987654')]
        );

    }
}
