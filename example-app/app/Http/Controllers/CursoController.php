<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return "Bienvenidos a la Pagina Cursos";
    }

    public function create()
    {
        return "En este apartado podras crear un curso";
    }

    public function show($curso)
    {
        return "Bienvenidos al curso de: $curso";
    }
}
