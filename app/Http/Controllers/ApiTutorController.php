<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tutor;

class ApiTutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Tutor::all();
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
        $tutor = new Tutor;
        $tutor->id_curp=$request->get('id_curp');
        $tutor->nombre=$request->get('nombre');
        $tutor->apellidos=$request->get('apellidos');
        $tutor->telefono=$request->get('telefono');
        $tutor->calle=$request->get('calle');
        $tutor->crto_a=$request->get('crto_a');
        $tutor->crto_b=$request->get('crto_b');
        $tutor->save();
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
        return Tutor::find($id);
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
        $tutor=Tutor::find($id);
        $tutor->id_curp=$request->post('id_curp');
        $tutor->nombre=$request->post('nombre');
        $tutor->apellidos=$request->post('apellidos');
        $tutor->telefono=$request->post('telefono');
        $tutor->calle=$request->post('calle');
        $tutor->crto_a=$request->post('crto_a');
        $tutor->crto_b=$request->post('crto_b');
        $tutor->update();
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
         return Tutor::destroy($id); 
    }
}
