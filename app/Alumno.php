<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //
    protected $table='alumnos';
    protected $primaryKey='matricula';
    public $incrementing=false;
    public $timestamps=false;
    protected $fillable=[
    	'matricula',
    	'nombre_al',
    	'apellidos_al',
    	'edad',
    	'curp'
    ];
}
