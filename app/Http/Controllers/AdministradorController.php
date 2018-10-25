<?php

namespace App\Http\Controllers;

use App\Administrador;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $administradores = Administrador::orderBy('id')->paginate(10);
       return view('administradores.index', compact('administradores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('administradores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $administrador = new Administrador();
        $administrador ->fill($imput);
        $administrador ->user_id = Auth::id();
        $administrador ->save();

        Session::flash('estado','El administrador ha sido creado con éxito!');
        return redirect('/administradores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function show(Administrador $administrador)
    {
        return view('administradores.show', compact('administrador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrador $administrador)
    {
        $user = User::all()->pluck('documento');
        $user = User::all()->pluck('nombres');
        $user = User::all()->pluck('apellidos');
        $user = User::all()->pluck('telefono');
        $user = User::all()->pluck('correo');
        $user = User::all()->pluck('fechaNac');
        $user = User::all()->pluck('nameUser');
        $user = User::all()->pluck('password');
        $user = User::all()->pluck('cargo_id');

        return view('administradoress.edit', compact('administrador','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administrador $administrador)
    {
        $input = $request->all();
  
        $administrador->fill($input)->save();
  
        Session::flash('administradores', 'El administrador fue editado exitosamente!');

        return redirect('/administradores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administrador $administrador)
    {
        $administrador->delete();

        Session::flash('estado', 'El administrador fue borrado exitosamente!');

        return redirect('/administradores');
    }
}
