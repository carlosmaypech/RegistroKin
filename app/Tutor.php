<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    //
    protected $table='tutores';
    protected $primaryKey='id_curp';
    public $incrementing=false;
    public $timestamps=false;
    protected $fillable=[
    	'id_curp',
    	'nombre',
    	'apellidos',
    	'telefono',
    	'aclle',
    	'crto_a',
    	'crto_b'
    ];
}
