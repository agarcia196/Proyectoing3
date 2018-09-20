<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicCrl extends Controller
{
    public function proyecto($name){
    	 return view('Publicaciones.proyecto')
    ->with('name',$name)
    ->with('title',$name);
    }

    public function buscar(){
    	return view('Publicaciones.buscador')
        ->with('title','Buscador');
    }
}
