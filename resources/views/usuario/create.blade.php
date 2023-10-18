@extends('Template.plantilla')
@section('stylo')
<link rel="stylesheet" href="./css/index.css">
@endsection('stylo')
@section('title','Insertar')
@section('content')
    <section class="containerF">    
        <form action="{{route('guardar')}}" method="post">
            @csrf
            <h1 class="tituloF">Ingrese Los Datos Del Usuario</h1>
            <input type="text" name="nombreU" required placeholder="Nombre De Usuario">  
            <input type="text" name="edad" required placeholder="Edad">
            <input type="text" name="telefono" required placeholder="Telefono">
            <select name="rol_id" class="inputS">
                <option selected="true" disabled="disabled">seleccione la marca</option>
                @foreach ($roles as $rol) 
                    <option value='{{$rol->id}}'>{{$rol->nombre}}</option>
                @endforeach
            </select>
            <input class="inputSu" type="submit" value="Registrar">
        </form>
    </section>
    <a class="verregistro" href="{{route('mostrar')}}"><input class="botonverr" type="button" value="Ver Registros"></a>
@endsection('content')
