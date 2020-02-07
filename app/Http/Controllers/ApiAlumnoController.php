<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;

class ApiAlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Alumno::all();
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
        $alumno = new Alumno;
        $alumno->matricula=$request->get('matricula');
        $alumno->nombre_al=$request->get('nombre_al');
        $alumno->apellidos_al=$request->get('apellidos_al');
        $alumno->edad=$request->get('edad');
        $alumno->curp=$request->get('curp');
        $alumno->save();
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
        return Alumno::find($id);
        /*$alumno=Alumnos::find($id);
        return $alumno;*/
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
        $alumno=Alumno::find($id);
        $alumno->matricula=$request->post('matricula');
        $alumno->nombre_al=$request->post('nombre_al');
        $alumno->apellidos_al=$request->post('apellidos_al');
        $alumno->edad=$request->post('edad');
        $alumno->curp=$request->post('curp');
        $alumno->update();
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
        return Alumno::destroy($id); 
    }
}
