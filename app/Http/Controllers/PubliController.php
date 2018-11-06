<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PubliController extends Controller
{
      public function proyecto($name){
        $Proyectos=array("NASA","Tesla","Dimitri","Core");
        $Usuarios=array("Alexis","Daniel","avatar","marc");
    	 return view('Publicaciones.proyecto')
    ->with('name',$Proyectos[$name])
    ->with('title',$Proyectos[$name])
    ->with('Encabezado','Proyecto '.$Proyectos[$name])
    ->with('nombre',$Usuarios)
     ->with('item','');
    }

    public function buscar(){
        $Usuarios=array("Alexis","Daniel","avatar","marc");
    	return view('Publicaciones.buscador')
        ->with('title','Buscador')
        ->with('Encabezado','Buscar')
        ->with('item','buscar')
        ->with('nombre',$Usuarios);
    }

    public function proyectolista(){
        $Proyectos=array("NASA","Tesla","Dimitri","Core");
    	return view('Publicaciones.proyectos')
    	->with('title','Mis Proyectos')
    	->with('item','ListaP')
        ->with('Encabezado','Proyectos')
        ->with('proyectos',$Proyectos);

    }
}
