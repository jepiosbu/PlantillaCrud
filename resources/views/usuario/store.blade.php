@extends('Template.plantilla')
@section('stylo')
<link rel="stylesheet" href="./css/store.css">
@endsection('stylo')
@section('title','Mostrar')
@section('content')
    <section class="containerF">
        <h1>Registro Exitoso</h1>
        <a href="{{route('registrar')}}"><input class="inputSu" type="submit" value="Regresar"></a>
    </section>
@endsection('content')