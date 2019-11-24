<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    // le decimos que tabla de la base de datos esta asignada a este modelo
    protected $table= 'doctores';

    //
    protected $fillable = [
        'nombre', 'apellidos','edad', 'especialidad',
    ];

    public $timestamps = false;
}
