<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generaciones extends Model
{
    protected $table = 'generaciones';

    protected $fillable = ['nombre', 'anio_inicio','anio_fin','status'];

    public function paises()
    {
        return $this->belongsTo('App\Municipios', 'id_municipio', 'id');
    }
}
