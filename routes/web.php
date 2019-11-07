<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','Maincontroller');

Route::get('/usuarios','Usercontroller');

Route::get('/usuarios/lista','Usercontroller@lista')->name('usuarios.lista');

Route::get('/usuarios/detalles/{id}', 'Usercontroller@detalles')->where('id','[0-9]+')->name('usuarios.detalles');

Route::get('/usuarios/nuevo', 'Usercontroller@nuevo')->name('usuarios.nuevo');

Route::post('/usuarios/guardar', 'Usercontroller@guardar');

Route::get('/usuarios/borrar', function () {
    return 'borrado de ususarios';
})->name('usuarios.borrar');
