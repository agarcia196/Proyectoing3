<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
    $hola = 2;
    $Usuarios=array("Alexis","Daniel","avatar","marc");
	if(1==$hola){
	return view('Usuarios.inicio')
    ->with('title','Wolf Society');
	}
	else{
	return view('Publicaciones.noticias')
    ->with('title','Wolf Society')
    ->with('Encabezado','Noticias')
    ->with('nombre',$Usuarios)
    ->with('item','dashboard');
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
		$Usuarios=array("Alexis","Daniel","avatar","marc");
		if($name==0){
		 return view('Usuarios.perfil')
		 ->with('Encabezado','Perfil de '.$Usuarios[$name])
    	 ->with('name',$Usuarios[$name])
    	->with('item','user')
	    ->with('title',$Usuarios[$name])
        ->with('nombre',$Usuarios);
	}else{
		return view('Usuarios.perfil2')
		 ->with('Encabezado','Hola! Soy '.$Usuarios[$name])
    	 ->with('name',$Usuarios[$name])
    	 ->with('item','')
	    ->with('title',$Usuarios[$name])
            ->with('nombre',$Usuarios);
	}

	}
}
