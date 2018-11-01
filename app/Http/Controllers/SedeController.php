<?php

namespace App\Http\Controllers;

use App\Sede;
use App\Admin;
use App\Barberia;
use Illuminate\Http\Request;
use Session;

class SedeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sedes = Sede::orderBy('id')->paginate(10);
        return view('sedes.index', compact('sedes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin = Admin::all()->pluck('documento', 'id');
        $barberia = Barberia::all()->pluck('razonSocial', 'id');
        return view('sedes.create', compact('admin', 'barberia'));
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

        $sede = new Sede();
        $nombre = $request->input('barberia_id');
        $cedula = $request->input('admin_id');
        $sede ->fill($input);
        $sede ->barberia_id = $nombre;
        $sede ->admin_id = $cedula;
        $sede ->save();

        Session::flash('estado','la sede se ha agregado con éxito!');
        return redirect('/sedes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function show(Sede $sede)
    {
        return view('sedes.show', compact('sede'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function edit(Sede $sede)
    {
        //$user = User::all()->pluck('nit');
        //$user = User::all()->pluck('razonSocial');
        //$user = User::all()->pluck('direccion');
        //$user = User::all()->pluck('telefono');
        //$user = User::all()->pluck('barberia_nit');
        //$user = User::all()->pluck('administrador_documento');
        $admin = Admin::all()->pluck('nombres', 'id');
        $barberia = Barberia::all()->pluck('razonSocial', 'id');

        return view('sedes.edit', compact('sede','admin','barberia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sede $sede)
    {

        $imput = $request->all();
  
        $sede->fill($input)->save();
  
        Session::flash('sedes', 'la sede fue actualizada correctamente!');

        return redirect('/sedes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sede $sede)
    {
        $sede->delete();

        Session::flash('estado', 'la sede fue borrada exitosamente!');

        return redirect('/sedes');
    }
}
