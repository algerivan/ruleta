<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio(){
        $opciones = App\Opcion::all();
        $largo = sizeof($opciones);
        for($i=0;$i<$largo;$i++){
            if(($opciones[$i]->costo)>50){
                $cuestan[$i]=$opciones[$i]->nombre;
            }else{
                $gratis[$i]=$opciones[$i]->nombre;
            }
        }
        return view('welcome', compact('gratis', 'cuestan'));
    }
    
    public function agregar(){
        return view('agregar');
    }
    
    public function editar(){
        $opciones = App\Opcion::paginate(8);
        return view('editar', compact('opciones'));
    }

    public function girar(){
        $opciones = App\Opcion::all();
        $tamaño = sizeof($opciones);
        $random = rand(1,$tamaño);
        return $opciones[$random-1]->nombre;
    }
    
    public function modificar($id){
        $opcion = App\Opcion::findOrFail($id);
        return view('modificar',compact('opcion'));
    }

    public function agregaOpcion(Request $request){
        $opcionNueva=new App\Opcion;
        $opcionNueva->nombre=$request->nombreOpcion;
        $opcionNueva->costo=$request->costoOpcion;
        $opcionNueva->descripcion=$request->descripcionOpcion;

        $opcionNueva->save();

        $opciones=App\Opcion::all();
        return back()->with('mensaje', 'Nota Agregada!');
    }

    public function actualizar(Request $request, $id){
        $opcionUpdate = App\Opcion::findOrFail($id);
        $opcionUpdate->nombre=$request->nombreOpcion;
        $opcionUpdate->costo=$request->costoOpcion;
        $opcionUpdate->descripcion=$request->descripcionOpcion;

        $opcionUpdate->save();

        return back()->with('mensaje', 'Opcion Actualizada!');
    }

    public function eliminar($id){
        $opcionEliminar = App\Opcion::findOrFail($id);
        $opcionEliminar -> delete();

        return back()->with('mensaje','Nota Eliminada!');
    }
}
