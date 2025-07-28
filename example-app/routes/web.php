<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return "Bienvenido a la Pagina Principal";
});

Route::get('cursos', function () {
    return "Bienvenidos a la Pagina Cursos";
});

Route::get('cursos/create', function () {
    return "En este apartado podras crear un curso";
});

Route::get('cursos/{curso}/{category?}', function ($curso, $category = null) {

    if ($category) {
        return "Bienvenido al curso de: $curso, de la categoria: $category";
    } else {
        return "Bienvenidos al curso de: $curso";
    }
});
