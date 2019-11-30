<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $table= 'consultas';

    protected $primaryKey='idConsulta';

    //
    protected $fillable = [
        'nombrePaciente',
    	'especialidad',
    	'fechaConsulta',
    	'nombreMedico',
        'diagnostico',
        'edadPaciente',
        'pesoPaciente',
        'alturaPaciente',
        'alergiasPaciente',
        'temPaciente', //tempratura
        'presionArtPaciente' //presion arterial
    ];

    public $timestamps = false;
}
