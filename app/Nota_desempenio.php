<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota_desempenio extends Model
{
    //
    protected $table='nota_desempenios';
    protected $primaryKey='id';
    public $incrementing=true;
    public $timestamps=false;
    protected $fillable=[
    	'id',
    	'nombre_al',
    	'apellidos_al',
    	'comportamiento'
    ];
}
