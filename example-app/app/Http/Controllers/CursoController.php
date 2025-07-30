<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::paginate();
        return view('Cursos/index', compact('cursos'));
    }

    public function create()
    {
        return view('Cursos/create');
    }

    public function show($id)
    {
        $curso = Curso::find($id);
        
        return view('Cursos/show', compact('curso'));
    }
}
