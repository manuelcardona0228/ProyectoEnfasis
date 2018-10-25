<?php

namespace App\Http\Controllers;

use App\Turno;
use Illuminate\Http\Request;

class TurnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turnos = Turno::orderBy('id')->paginate(10);
        return view('turnos.index', compact('turnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('turnos.create');
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

        $turno = new Turno();
        $galeria ->fill($imput);
        $galeria ->user_id = Auth::id();
        $galeria ->save();

        Session::flash('estado','el turno ha sido añadido con éxito');
        return redirect('/turnos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function show(Turno $turno)
    {
        return view('turnos.show',compact('turno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function edit(Turno $turno)
    {
        $user = User::all()->pluck('fecha');
        $user = User::all()->pluck('barbero_documento');
        $user = User::all()->pluck('user_id');
        $user = User::all()->pluck('servicio_id');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turno $turno)
    {
        $input = $request->all();
        $turno ->fill($input)->save();
        Session::flash('turnos','el turno se ha editado correctamente');
        return redirect('/turnos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turno $turno)
    {
        $turno->delete();
        Session::flash('estado','el turno se ha eliminado correctamente');
        return redirect('/turnos');
    }
}
