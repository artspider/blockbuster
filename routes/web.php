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

Route::get('/', function () {
    return view('welcome');
});

Route::get('vista', function () {
    return view('vista');
});

Route::resource('libros', 'librosController');

Route::get('libros/{genero}', function ($genero) {
    switch ($genero) {
        case 'amor':
            return "Libros de amor";
            break;
        case 'drama':
            return "Libros de drama";
            break;
        case 'terror':
            return "Libros de terror";
            break;
        case 'aventura':
            return "Libros de aventura";
            break;

        default:
            return "No existe esa categoria";
            break;
    }
});
