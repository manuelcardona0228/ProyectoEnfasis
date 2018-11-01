<?php

namespace App\Http\Controllers;

use App\Barberia;
use App\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;

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
        $admin = Admin::all()->pluck('documento', 'id');
        return view('barberias.create' , compact('admin'));
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
        $cedula = $request->input('admin_id');
        $barberia = new Barberia();
        $barberia ->fill($input);
        $barberia ->admin_id= $cedula;
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
        //$user = User::all()->pluck('nit');
        //$user = User::all()->pluck('razonSocial');
        //$user = User::all()->pluck('direccion');
        //$user = User::all()->pluck('telefono');
        //$user = User::all()->pluck('admin_id');
        //$user = User::all()->pluck('sitioWeb');
        $admin = Admin::all()->pluck('nombres', 'id');
        //$user = User::all()->pluck('nombres');
        //$user = User::all()->pluck('apellidos');
        //$user = User::all()->pluck('telefono');
        //$user = User::all()->pluck('correo');
        //$user = User::all()->pluck('fechaNac');
        //$user = User::all()->pluck('nameUser');
        //$user = User::all()->pluck('password');
        //$user = User::all()->pluck('cargo_id');

        return view('barberias.edit', compact('barberia','admin'));
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
