<?php

namespace App\Http\Controllers;


use App\Admin;
use App\user;
use App\Cargo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
//use App\Http\Request\AdministradoresRequest;
use Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $admins = Admin::orderBy('id')->paginate(10);
       return view('admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admins.create');
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
        $contraseña = $request->input("password");
        $email = $request->input("email");
        $contraseñaEncriptada = Hash::make($contraseña);
        $admin = new Admin();
        $admin->fill($input);
        $admin->email = $email;
        $admin->password = $contraseñaEncriptada;
        $admin->cargo_id = 1;
        $admin->save();


        Session::flash('estado','El administrador ha sido creado con éxito!');
        return redirect('/admins');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        return view('admins.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        $cargo = Cargo::all()->pluck('descripcion', 'id');
        //$user = User::all()->pluck('nombres');
        //$user = User::all()->pluck('apellidos');
        //$user = User::all()->pluck('telefono');
        //$user = User::all()->pluck('correo');
        //$user = User::all()->pluck('fechaNac');
        //$user = User::all()->pluck('nameUser');
        //$user = User::all()->pluck('password');
        //$user = User::all()->pluck('cargo_id');

        return view('admins.edit', compact('admin','cargo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $input = $request->all();
  
        $admin->fill($input)->save();
  
        Session::flash('estado', 'El administrador fue editado exitosamente!');

        return redirect('/admins');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();

        Session::flash('estado', 'El administrador fue borrado exitosamente!');

        return redirect('/admins');
    }
}
