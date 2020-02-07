<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='user';
    // protected $with = ['rol'];
    protected $primaryKey='user';
    public $incrementing=false;

    protected $fillable=[
    	'user',
    	'password',
    	'nombre',
    	'apellidos',
    	'id_rol'
        // 'foto'
    ];
    // public function rol(){
    // 	return $this->belongsTo(Rol::class, 'id_rol','id_rol');
    // }
}
