<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    // le decimos que tabla de la base de datos esta asignada a este modelo
    protected $table= 'evento';

    //
    protected $fillable = [
        'titulo', 'descripcion', 'fecha',
    ];

    public $timestamps = false;
}
