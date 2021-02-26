<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use App\Models\Edad;


class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuarios::all();
       return view('usuario.index') ->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarios = new Usuarios();
        $usuarios -> nombres = $request ->get('nombres');
        $usuarios -> apellidos = $request ->get('apellidos');
        $usuarios -> telefono = $request ->get('telefono');
        $usuarios -> correo = $request ->get('correo');
        $usuarios -> edad = $request ->get('edad');
        $usuarios -> save();

        $edads = new Edad();
        $edads -> edad = $request ->get('edad');
        $edads -> save();
        return redirect('/usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuarios::find($id);
        return view('Usuario.edit')->with('usuario', $usuario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario =  Usuarios::find($id);
        $usuario -> nombres = $request ->get('nombres');
        $usuario -> apellidos = $request ->get('apellidos');
        $usuario -> telefono = $request ->get('telefono');
        $usuario -> correo = $request ->get('correo');
        $usuario -> edad = $request ->get('edad');
        $usuario -> save();

        return redirect('/usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario =  Usuarios::find($id);
        $usuario -> delate();
        return redirect('/usuarios');
    }
}
