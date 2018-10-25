<?php

namespace App\Http\Controllers;

use App\Cargo;
use App\User;
use Illuminate\Http\Request;
use Session;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = Cargo::orderBy('id')->paginate(10);

        return view('cargos.index', compact('cargos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cargos.create');
        //
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
 
        $cargo = new Cargo();
        $cargo ->fill($input);
        //$cargo ->user_id = Auth::id();
        $cargo ->save();

        Session::flash('estado','El cargo ha sido creado con éxito!');
        return redirect('/cargos');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cargo $cargo)
    {
        return view('cargos.show', compact('cargo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cargo $cargo)
    {
        $user = User::all()->pluck('descripcion');
 
        return view('cargos.edit', compact('cargo','users'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cargo $cargo)
    {
        $input = $request->all();
  
        $cargo->fill($input)->save();
  
        Session::flash('cargos', 'El cargo fue editado exitosamente!');

        return redirect('/cargos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cargo $cargo)
    {
        $cargo->delete();

        Session::flash('estado', 'El cargo fue borrado exitosamente!');

        return redirect('/cargos');
    }
}
