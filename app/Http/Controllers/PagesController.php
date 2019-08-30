<?php

namespace App\Http\Controllers;

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
        return view('editar');
    }
    
    public function modificar($id = null){
        $numero=$id;
        return view('modificar',compact('numero','id'));
    }
}
