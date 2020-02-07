<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    //
    protected $table='profesores';
    protected $primaryKey='cedula';
    public $incrementing=false;
    public $timestamps=false;
    protected $fillable=[
    	'cedula',
    	'nombre',
    	'apellidos',
    	'telefono'
    	/*'curp',
    	'matricula'*/
    ];
}
