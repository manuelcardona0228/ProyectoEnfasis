<?php

namespace App\Http\Controllers;

use App\Barbero;
use App\Sede;
use Illuminate\Http\Request;
use Session;

class BarberoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barberos = Barbero::orderBy('id')->paginate(10);
        return view('barberos.index', compact('barberos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sede = Sede::all()->pluck('razonSocial', 'id');
        return view('barberos.create', compact('sede'));
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
        $sede = $request->input('sede_id');
        $barbero = new Barbero();
        $barbero ->fill($input);
        $barbero ->sede_id = $sede;
        $barbero ->cargo_id = 2;
        $barbero ->save();

        Session::flash('estado','el barbero ha sido creado con éxito!');
        return redirect('/barberos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barbero  $barbero
     * @return \Illuminate\Http\Response
     */
    public function show(Barbero $barbero)
    {
        return view('barberos.show', compact('barbero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barbero  $barbero
     * @return \Illuminate\Http\Response
     */
    public function edit(Barbero $barbero)
    {
        //$user = User::all()->pluck('documento');
        //$user = User::all()->pluck('nombres');
        //$user = User::all()->pluck('apellido');
        //$user = User::all()->pluck('telefono');
        //$user = User::all()->pluck('correo');
        //$user = User::all()->pluck('fechaNac');
        //$user = User::all()->pluck('nameUser');
        //$user = User::all()->plunk('password');
        $sede = Sede::all()->pluck('razonSocial', 'id');
        return view('barberos.edit', compact('barbero','sede'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barbero  $barbero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barbero $barbero)
    {
        $input = $request->all();
  
        $barbero->fill($input)->save();
  
        Session::flash('barberos', 'el barbero fue actualizado correctamente!');

        return redirect('/barberos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barbero  $barbero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barbero $barbero)
    {
        $barberor->delete();

        Session::flash('estado', 'el barbero se ha eliminado correctamente');

        return redirect('/barberos');
    }
}
