<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultados_admision extends Model
{
    protected $table = 'resultados_admision';

    protected $fillable = ['anio_examen', 'folio_examen','puntaje_total','puntaje_matematico',
    'puntaje_analitico','puntaje_espaniol','puntaje_biologia','puntaje_fisica','puntaje_historia',
    'puntaje_ingles','id_alumno','status'];

    public function alumnos()
    {
        return $this->belongsTo('App\Alumnos', 'id_alumno', 'id');
    }
}
