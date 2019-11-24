<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    // le decimos que tabla de la base de datos esta asignada a este modelo
    protected $table= 'paciente';

    //
    protected $fillable = [
        'nombre', 'edad', 'DUI',
    ];

    public $timestamps = false;
}
