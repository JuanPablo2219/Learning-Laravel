@extends('layouts.plantilla')

@section('title', 'Contacto')
    
@section('content')

    <h2>Dejanos un mensaje</h2>
    
    <form action="{{route('contactanos.store')}}" method="post">

        @csrf
        
    <label for="">
        Nombre:
        <br>
        <input type="text" name="name">
    </label>
    <br>
    <br>
    <label>
        Email:
        <br>
        <input type="text" name="email">
    </label>
    <br>
    <br>
    <label>
        Mensaje:
        <br>
        <textarea name="mensaje" rows="3"></textarea>
    </label>
    <br>
    <br>

    <button>Enviar</button>
</form>
@endsection