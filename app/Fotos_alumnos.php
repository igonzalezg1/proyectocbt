<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fotos_alumnos extends Model
{
    protected $table = 'fotos_alumnos';

    protected $fillable = ['id_alumno', 'ruta', 'status'];

    public function alumnos()
    {
        return $this->belongsTo('App\Alumnos', 'id_alumno', 'id');
    }
}
