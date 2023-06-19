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


//thanks register
Route::view('/thanks', 'thanks')->name('thanks');