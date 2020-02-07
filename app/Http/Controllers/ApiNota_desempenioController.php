<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nota_desempenio;

class ApiNota_desempenioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Nota_desempenio::all();
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
        $nota = new Nota_desempenio;
        $nota->id=$request->get('id');
        $nota->nombre_al=$request->get('nombre_al');
        $nota->apellidos_al=$request->get('apellidos_al');
        $nota->comportamiento=$request->get('comportamiento');
        $nota->save();
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
        return Nota_desempenio::find($id);
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
        $nota=Nota_desempenio::find($id);
        $nota->id=$request->post('id');
        $nota->nombre_al=$request->post('nombre_al');
        $nota->apellidos_al=$request->post('apellidos_al');
        $nota->comportamiento=$request->post('comportamiento');
       
        $nota->update();
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
        return Nota_desempenio::destroy($id);
    }
}
