<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Doctor;
use App\Paciente;

class ControllerPaciente extends Controller
{
    //
    public function registroPaciente(){

  
        return view("registroPaciente");
  
    }
    
  
      public function create(Request $request){
        
  
        $this->validate($request, [
        'nombre'     =>  'required',
        'edad' =>  'required',
        'dui'=>'required'
       ]);
  
       //uso del orm mezclado con las consultas basicas proporcionadas por laravel 
       // esto se pudo a ver realizado con $event= new Event;
      // y despues con save cuando cada atributo ya lo huvieramos asignados 
      
  
  
  
       Paciente::insert([
          'nombre'=> $request->input("nombre"),
          'edad'  => $request->input("edad"),
          'DUI'  => $request->input("dui")
          
        ]);
  
        return back()->with('success', 'Enviado exitosamente!');
  

    }
}