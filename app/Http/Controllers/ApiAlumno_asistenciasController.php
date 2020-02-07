<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno_asistencias;

class ApiAlumno_asistenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Alumno_asistencias::all();
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
        $asis = new Alumno_asistencias;
        $asis->id_asis=$request->get('id_asis');
        $asis->nombre_al=$request->get('nombre_al');
        $asis->apellido_al=$request->get('apellido_al');
        $asis->fecha=$request->get('fecha');
        $asis->save();
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
        return Alumno_asistencias::find($id);
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
        $asis=Alumno_asistencias::find($id);
        $asis->id_asis=$request->post('id_asis');
        $asis->nombre_al=$request->post('nombre_al');
        $asis->apellido_al=$request->post('apellido_al');
        $asis->fecha=$request->post('fecha');
       
        $asis->update();
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
        return Alumno_asistencias::destroy($id);
    }
}
