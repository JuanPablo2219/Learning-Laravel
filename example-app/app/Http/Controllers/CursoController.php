<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return view('Cursos/index');
    }

    public function create()
    {
        return view('Cursos/create');
    }

    public function show($curso)
    {
        return view('Cursos/show', compact('curso'));
    }
}   
