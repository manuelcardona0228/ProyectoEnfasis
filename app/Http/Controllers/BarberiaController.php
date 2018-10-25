<?php

namespace App\Http\Controllers;

use App\Barberia;
use Illuminate\Http\Request;

class BarberiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barberias = Barberia::orderBy('id')->paginate(10);
        return view('barberias.index', compact('barberias'));
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

        $barberia = new Barberia();
        $barberia ->fill($imput);
        $barberia ->user_id = Auth::id();
        $barberia ->save();

        Session::flash('estado','la barberia ha sido creada con éxito!');
        return redirect('/barberias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barberia  $barberia
     * @return \Illuminate\Http\Response
     */
    public function show(Barberia $barberia)
    {
        return view('barberias.show', compact('barberia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barberia  $barberia
     * @return \Illuminate\Http\Response
     */
    public function edit(Barberia $barberia)
    {
        $user = User::all()->pluck('nit');
        $user = User::all()->pluck('razonSocial');
        $user = User::all()->pluck('direccion');
        $user = User::all()->pluck('telefono');
        $user = User::all()->pluck('administrador_documento');
        $user = User::all()->pluck('sitioWeb');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barberia  $barberia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barberia $barberia)
    {
        $input = $request->all();
  
        $barberia->fill($input)->save();
  
        Session::flash('barberias', 'la barberia fue actualizada correctamente!');

        return redirect('/barberias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barberia  $barberia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barberia $barberia)
    {
        $barberia->delete();

        Session::flash('estado', 'la barberia fue borrado exitosamente!');

        return redirect('/barberias');
    }
}
