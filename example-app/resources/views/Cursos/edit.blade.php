@extends('layouts.plantilla')

@section('title', 'Editar Curso')
    
@section('content')
    <h1>Editar Curso</h1>

    <a href={{route('cursos.show', $curso)}}>Regresar al Curso</a>
    <br>
    <br>

    <form action={{route('cursos.update', $curso)}} method="POST">
        @csrf
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>
        <br>
        @error('name')
            * {{$message}}
        @enderror
        <br>
<br>
        <label>
            Descripción
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion',  $curso->description)}}</textarea>
        </label>
        <br>
        @error('description')
            * {{$message}}
        @enderror
        <br>
<br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
        </label>
        <br>
        @error('categoria')
            * {{$message}}
        @enderror
        <br>
<br>
<br>
        <button type="submit">Guardar Cambios</button>
    </form>
@endsection