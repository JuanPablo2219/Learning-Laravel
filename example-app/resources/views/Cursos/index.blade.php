@extends('layouts.plantilla')

@section('title', 'Inicio Cursos')

@section('content')
    <h1>Bienvenidos a la Pagina de Inicio de los Cursos</h1>

    <a href={{route('cursos.create')}}>Crear Curso</a>

    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href={{route('cursos.show', $curso->slug  )}}>{{$curso->name}}</a>
            </li>
        @endforeach
    </ul>

    {{$cursos->links()}}
@endsection
