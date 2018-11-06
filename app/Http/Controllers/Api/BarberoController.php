<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BarberoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barberos = Barbero::all();

        return response()->json($barberos, 200);
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

        $barbero = new Barbero();
        $barbero->fill($input);
        
        $barbero->save();

        return response()->json($barbero, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barbero = Barbero::find($id);

        if($barbero != null)  
            return response()->json($barbero, 200);
        else
        {
            $datos = ['mensaje' => 'No lo encontré', 'error' => true, 'id' => 666];

            return response()->json($datos, 404);
        }
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
        $input = $request->all();

        $barbero->update($input);

        return response()->json($barbero, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barbero->delete();

        return response()->json($barbero, 200);
    }
}
