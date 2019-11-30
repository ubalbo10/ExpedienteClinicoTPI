<?php

namespace App\Http\Controllers;

use App\Event;
use App\Doctor;
use App\Paciente;
use Illuminate\Http\Request;

class ControllerConsulta extends Controller
{
    public function registroConsulta(){

  
        return view("registroConsulta");
  
    }

    public function create(Request $request){

        $this->validate($request, [
        'nombrePaciente' => 'required',
        'especialidad' => 'required',
        'fechaConsulta' => 'required',
        'nombreMedico' => 'required',
        'diagnostico' => 'required',
        'edadPaciente' => 'required',
        'pesoPaciente' => 'required',
        'alturaPaciente' => 'required',
        'alergiasPaciente',
        'temPaciente' => 'required',
        'presionArtPaciente' 
       ]);
  
       //uso del orm mezclado con las consultas basicas proporcionadas por laravel 
       // esto se pudo a ver realizado con $event= new Event;
      // y despues con save cuando cada atributo ya lo huvieramos asignados 
      
  
  
  
       Consulta::insert([
          'nombrePaciente' => $request->input("nombrePaciente"),
          'fechaConsulta' => $request->input("fechaConsulta"),
          'edadPaciente' => $request->input("edadPaciente"),
          'especialidad' => $request->input("especialidad"),
          'nombreMedico' => $request->input("nombreMedico"),
          'diagnostico' => $request->input("diagnostico"), 
          'pesoPaciente' => $request->input("pesoPaciente"),
          'alturaPaciente' => $request->input("alturaPaciente"),
          'alergiasPaciente' => $request->input("alergiasPaciente"),
          'temPaciente' => $request->input("temPaciente"),
          'presionArtPaciente' => $request->input("presionArtPaciente"),
          
        ]);
  
        return back()->with('success', 'Enviado exitosamente!');
  
      }
}
