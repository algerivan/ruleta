<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio(){
        return view('welcome');
    }
    
    public function agregar(){
        return view('agregar');
    }
    
    public function editar(){
        $opciones = App\Opcion::all();
        return view('editar', compact('opciones'));
    }
    
    public function modificar($id){
        $opcion = App\Opcion::findOrFail($id);
        return view('modificar',compact('opcion'));
    }
}
