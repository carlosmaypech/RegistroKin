<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profesor;

class ApiProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Profesor::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $profesor = new Profesor;
        $profesor->cedula=$request->get('cedula');
        $profesor->nombre=$request->get('nombre');
        $profesor->apellidos=$request->get('apellidos');
        $profesor->telefono=$request->get('telefono');
        /*$profesor->curp=$request->get('curp');
        $profesor->matricula=$request->get('matricula');*/
        $profesor->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Profesor::find($id);
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
        //
        $profesor=Profesor::find($id);
        $profesor->cedula=$request->post('cedula');
        $profesor->nombre=$request->post('nombre');
        $profesor->apellidos=$request->post('apellidos');
        $profesor->telefono=$request->post('telefono');
       /* $profesor->curp=$request->post('curp');
        $profesor->matricula=$request->post('matricula');*/
        $profesor->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return Profesor::destroy($id);
    }
}
