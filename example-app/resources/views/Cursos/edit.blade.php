@extends('layouts.plantilla')

@section('title', 'Editar Curso')
    
@section('content')
    <h1>Editar Curso</h1>

    <a href={{route('cursos.show', $curso)}}>Atras</a>
    <br>
    <br>

    <form action={{route('cursos.update', $curso)}} method="POST">
        @csrf
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{$curso->name}}">
        </label>
<br>
        <label>
            Descripción
            <br>
            <textarea name="descripcion" rows="5">{{$curso->description}}</textarea>
        </label>
<br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{$curso->categoria}}">
        </label>
<br>
<br>
        <button type="submit">Guardar Cambios</button>
    </form>
@endsection