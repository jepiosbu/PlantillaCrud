@extends('Template.plantilla')
@section('stylo')
<style>
@import url('https://fonts.googleapis.com/css2?family=Handjet:wght@200;300&display=swap');
body
{
    margin: 0px;
    width: 100vw;   
    height: 100vh;
    background: url();   
    background-repeat: no-repeat;
    background-size: 100% 100%;
    display: grid;
    place-content: center;
}
.containerF
{
    width: 35vw;
    height: 30vw;
    border-radius: 1vw;
    backdrop-filter: blur(3px);
}
form
{
    width: 35vw;
    height: 30vw;
    border-radius: 1vw;
    background-color: rgba(0, 0, 0, 0.158);
    display:flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.tituloF
{
    font-family: 'Handjet', cursive;
    font-size: 3vw;
    color: white;
    position: relative;
    bottom: 3vw;
}
input
{
    width: 25vw;
    height: 2vw;
    margin-bottom: 1vw;
    position: relative;
    bottom: 3vw;
    border-radius: 0.5vw;
    font-size: 1vw;
}
.inputS
{
    width: 25.5vw;
    height: 2.4vw;
    background-color: white;
    font-size: 1vw;
    position: relative;
    bottom: 3vw;
    border-radius: 0.5vw;
}
input:focus
{
    outline: none;
}
.inputS:focus
{
    outline: none;
}
.inputSu
{
    width: 15vw;
    height: 2.4vw;
    background-color: black;
    color: white;
    font-size: 1vw;
    font-weight: bold;
    position: relative;
    top: 0.001vw;
    cursor: pointer;
}
.verregistro
{
    position: relative;
    left: 73vw;
    bottom: 40vw;
}
.botonverr
{
    cursor: pointer;
    color: white;
    background-color: rgba(0, 0, 0, 0.384);
}
</style>
@endsection('stylo')
@section('title','Insertar')
@section('content')
    <section class="containerF">    
        <form action="{{url('update/'.$usuario->id)}}" method="post">
            @method('PUT')
            @csrf
            <h1 class="tituloF">Ingrese Los Datos Del Usuario</h1>
            <input type="text" name="nombreU" required placeholder="Nombre De Usuario" value="{{$usuario->nombreU}}">  
            <input type="text" name="edad" required placeholder="Edad" value="{{$usuario->edad}}">
            <input type="text" name="telefono" required placeholder="Telefono" value="{{$usuario->telefono}}">
            <select name="rol_id" class="inputS"    >
                <option selected="true" disabled="disabled">seleccione la marca</option>
                @foreach ($roles as $rol) 
                    <option value='{{$rol->id}}'>{{$rol->nombre}}</option>
                @endforeach
            </select>
            <input class="inputSu" type="submit" value="Actualizar">
        </form>
    </section>
@endsection('content')
