@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->name)

@section('content')
    <h1>Bienvenidos al curso de: {{$curso->name}} </h1>
    <a href={{route('cursos.index')}}>Volver a Cursos</a>
    <br>
    <br>
    <a href={{route('cursos.edit', $curso)}}>Editar Curso</a>
    <p><strong>Categoria: </strong>{{$curso->categoria}}</p>
    <p>{{$curso->descripcion}}</p>
    <br>

    <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar Curso</button>
    </form>
@endsection