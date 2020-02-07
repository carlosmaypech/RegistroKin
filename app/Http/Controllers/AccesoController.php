<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Session;
use Redirect;
use Cache;
use Cookie;

class AccesoController extends Controller
{
    public function validar(Request $request){
// para ver si jala con la vista
        // return "usuario: $request->usuario password: $request->password";


        $usuario=$request->usuario;
        $password=$request->pass;

        $resp= Usuario::where('user', '=',$usuario)
        ->where('password','=', $password)
        ->get();
       

        // return $resp;
        if (count($resp)>0){

             $user =$resp[0]->nombre.' '.$resp[0]->apellidos;

            Session::put('user',$user);
            Session::put('rol',$resp[0]->rol);

            if($resp[0]->rol=="Administrador")
              return Redirect::to('inicio');
         
            }
            else{
                return Redirect::to('error');
            }
        
            
    }

    public function salir(){
        Session::flush();
        Session::reflash();
        Cache::flush();
        Cookie::forget('laravel_session');
        unset($_COOKIE);
        unset($_SESSION);

        return Redirect::to('/');
    }
}
