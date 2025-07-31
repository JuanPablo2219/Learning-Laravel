@extends('layouts.plantilla')

@section('title', 'Crear Curso')

@section('content')
    <h1>En esta pagina podras crear un curso</h1>
    <a href={{route('cursos.index')}}>Regrear a Cursos</a>
    <br>
    <br>

    <form action={{route('cursos.store')}} method="POST">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        <br>
        @error('name')
            * {{$message}}
        @enderror
        <br>
<br>
        <label>
            Slug:
            <br>
            <input type="text" name="slug" value="{{old('slug')}}">
        </label>
        @error('slug')
            * {{$message}}
        @enderror
        <br>
        <br>
        <label>
            Descripción
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
        </label>
        <br>
        @error('descripcion')
            * {{$message}}
        @enderror
        <br>
<br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>
        <br>
        @error('categoria')
            * {{$message}}
        @enderror
<br>
<br>
        <button type="submit">Guardar Curso</button>
    </form>
@endsection