@extends('Template.plantilla')
@section('stylo')
<link rel="stylesheet" href="./css/show.css">
@endsection('stylo')
@section('title','Mostrar')
@section('content')
    
    <section class="containerF">
        <table>
            <h1>Usuarios Registrados</h1>
            <tr>
                <td>ID</td>
                <td>NOMBRE</td>
                <td>EDAD</td>
                <td>TELEFONO</td>
                <td>ROL</td>
                <a class="link" href="{{route('registrar')}}"><Button class="registrarr" type="button">Nuevo Registro</Button></a>
            </tr>
            @foreach ($usuario as $item )
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nombreU}}</td>
                <td>{{$item->edad}}</td>
                <td>{{$item->telefono}}</td>
                <td>{{$item->Rol->nombre}}</td>
                <td class="editar"><a href="{{url('edit/'.$item->id)}}"><Button class="editarb">Editar</Button></a></td>
                <td class="eliminar"><form action="{{url('delete/'.$item->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="eliminarb" type="submit">Eliminar</button>
                </form></td>
            </tr>
            @endforeach
        </table>
    </section>
@endsection('content')