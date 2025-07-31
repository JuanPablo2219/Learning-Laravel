<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use App\Models\Curso;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::resource('cursos', CursoController::class);
Route::view('nosotros','about')->name('about');