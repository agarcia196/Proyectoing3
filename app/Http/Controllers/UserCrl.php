<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCrl extends Controller
{
    public function index(){
    $hola = 2;
	if(1==$hola){
	return view('Publicaciones.noticias')
    ->with('title','No tengo nombre');
	}
	else{
	return view('Usuarios.inicio')
    ->with('title','Home');
	} 
	}

	public function register(){
		 return view('Usuarios.registro')
    	 ->with('title','Registro');
	}

	public function config() {
    	return view('Usuarios.config')
   		->with('title','Configuración');
	}

	public function perfil($name){
		 return view('Usuarios.perfil')
    	 ->with('name',$name)
	    ->with('title',$name);
	}
}
