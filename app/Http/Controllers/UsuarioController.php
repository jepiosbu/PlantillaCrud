<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Rol;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario=Usuario::all(); 
        $rol=Rol::all();
        return view('usuario.show',compact('usuario','rol'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Rol::all();
        return view('usuario.create',['roles' => $roles ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $usuario= new Usuario();
           $usuario->nombreU=$request->nombreU;
           $usuario->edad=$request->edad;
           $usuario->telefono=$request->telefono;
           $usuario->rol_id=$request->rol_id;
           $usuario->save();
        return view('usuario.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        $usuario=Usuario::all();
        return view('usuario.show',['usuario'=>$usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles=Rol::all();
        $usuario= Usuario::find($id);
        return view('usuario.edit',compact('roles','usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario= Usuario::find($id);
        $usuario->nombreU=$request->nombreU;
        $usuario->edad=$request->edad;
        $usuario->telefono=$request->telefono;
        $usuario->rol_id=$request->rol_id;
        $usuario->save();
        return redirect()->route('mostrar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario= Usuario::find($id);
        $usuario->delete();
        return redirect()->route('mostrar');
    }
}
