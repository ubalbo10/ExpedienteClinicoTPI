<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Doctor;
use App\Paciente;
use DB;

class ControllerPaciente extends Controller
{
    public function index(Request $request){
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $pacientes=DB::table('paciente')->where('nombre','LIKE','%'.$query.'%')
            ->paginate(7);
            return view('paciente/index',["pacientes"=>$pacientes,"searchText"=>$query]);
        }
    }
    //
    public function registroPaciente(){

  
        return view("registroPaciente");
  
    }
    
    public function ListaPacientes(){

        $pacientes = Paciente::All();
  
        return view("paciente/listar",[
          "pacientes" => $pacientes
        ]);
  
      }
  
      public function deletePacientes($id_paciente){
        Event::where('id_paciente',$id_paciente)->delete();
        Paciente::where('id_paciente',$id_paciente)->delete();
        
  
        return redirect("/Paciente/Listar");
  
      }
  
      // public function updatePacientes($id_paciente){

        
      //   $paciente=Paciente::where('id_paciente',$id_paciente);
        
  
      //   return view("paciente/editar",[
      //     "paciente" => $paciente
      //   ]);
  
      // }
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
