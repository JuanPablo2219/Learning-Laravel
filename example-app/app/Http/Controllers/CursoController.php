<?php

namespace App\Http\Controllers;

use App\Http\Requests\CursoStore;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::orderBy('id', 'desc')->paginate();
        return view('Cursos/index', compact('cursos'));
    }

    public function create()
    {
        return view('Cursos/create');
    }

    public function store(CursoStore $request)
    {
        $curso = new Curso();
        $curso->name = $request->name;
        $curso->description = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect(route('cursos.show', $curso->id));
    }

    public function show(Curso $curso)
    {
        return view('Cursos/show', compact('curso'));
    }

    public function edit(Curso $curso)
    {

        return view('Cursos/edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {

        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
        ]);

        $curso->name = $request->name;
        $curso->description = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect(route('cursos.show', $curso->id));
    }
}
