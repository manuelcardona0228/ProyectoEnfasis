<?php

namespace App\Http\Controllers;

use App\Galeria;
use App\Barbero;
use Illuminate\Http\Request;
use Session;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galerias = Galeria::orderBy('id')->paginate(10);
        return view('galerias.index', compact('galerias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barbero = Barbero::all()->pluck('nombres', 'id');
        return view('galerias.create', compact('barbero'));

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
        $barbero = $request->input('barbero_id');
        $galeria = new Galeria();
        $galeria ->fill($input);
        $galeria ->barbero_id = $barbero;
        $galeria ->save();

        Session::flash('estado','la galeria ha sido añadida con éxito');
        return redirect('/galerias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function show(Galeria $galeria)
    {
        return view('galerias.show',compact('galeria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeria $galeria)
    {
        //$user = User::all()->pluck('nombre');
        //$user = User::all()->pluck('descripcion');
        //$user = User::all()->pluck('barbero_documento');

        $barbero = Barbero::all()->pluck('nombres', 'id');
        return view('galerias.edit', compact('galeria','barbero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeria $galeria)
    {
        $input = $request->all();
        $galeria ->fill($input)->save();
        Session::flash('galeria','la galeria se ha editado correctamente');
        return redirect('/galerias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeria $galeria)
    {
        $galeria->delete();
        Session::flash('estado','la galeria se ha eliminado correctamente');
        return redirect('/galerias');
    }
}
