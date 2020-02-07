<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno_asistencias extends Model
{
    //
    protected $table='alumno_asistencias';
    protected $primaryKey='id_asis';
    public $incrementing=true;
    public $timestamps=false;
    protected $fillable=[
    	'id_asis',
    	'nombre_al',
    	'apellido_al',
    	'fecha'
    ];
}
