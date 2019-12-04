<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Doctor;
use App\Paciente;

class ControllerMedico extends Controller
{
    //
    public function registroMedico(){

  
        return view("registroMedico");
  
    }


    public function create(Request $request){

        $this->validate($request, [
        'nombre' => 'required',
        'apellidos' => 'required',
        'edad' => 'required',
        'especialidad' => 'required'
       ]);
  
       //uso del orm mezclado con las consultas basicas proporcionadas por laravel 
       // esto se pudo a ver realizado con $event= new Event;
      // y despues con save cuando cada atributo ya lo huvieramos asignados 
      
  
  
  
       Doctor::insert([
          'nombre' => $request->input("nombre"),
          'apellidos' => $request->input("apellidos"),
          'edad' => $request->input("edad"),
          'especialidad' => $request->input("especialidad")
          
        ]);
  
        return back()->with('success', 'Enviado exitosamente!');
  
      }

      
    public function ListaMedicos(){

      $medicos = Doctor::All();

      return view("medico/listar",[
        "medicos" => $medicos
      ]);

    }
    
    // public function updateMedicos($id_doctor){

        
    //   $doctor=Doctor::where('id_doctor',$id_doctor);
      

    //   return view("medico/editar",[
    //     "doctor" => $doctor
    //   ]);

    // }
    public function deleteMedicos($id_medico){
      Event::where('id_doctor',$id_medico)->delete();
      Doctor::where('id_doctor',$id_medico)->delete();
      

      return redirect("/Medico/Listar");

    }
  
     
}