<?php

use Illuminate\Support\Facades\Route;

$baseRoute = 'layouts.course';

/* Route::get('/', function () {
    return view('welcome');
}); */

//home
Route::resource('/', 'ClienteController')->only(['index', 'store'])->name('index','welcome');

### CURSOS ###
//GESTION

//MINERIA


//Inyectables
Route::view('/inyectables', $baseRoute.'.inyectables')->name('inyectables');
Route::view('/adultomayor', $baseRoute.'.adultomayor')->name('adultomayor');
Route::view('/primerosauxilios', $baseRoute.'.primerosauxilios')->name('primerosauxilios');


//thanks register
Route::view('/thanks', 'thanks')->name('thanks');