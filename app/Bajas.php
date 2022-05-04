<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bajas extends Model
{
    protected $table = 'bajas';

    protected $fillable = ['id_alumno', 'tipo_baja', 'status'];

    public function alumnos()
    {
        return $this->belongsTo('App\Alumnos', 'id_alumno', 'id');
    }
}
