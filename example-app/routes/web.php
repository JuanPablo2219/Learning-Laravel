<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use App\Models\Curso;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::resource('cursos', CursoController::class);