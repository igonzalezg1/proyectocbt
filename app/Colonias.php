<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colonias extends Model
{
    protected $table = 'colonias';

    protected $fillable = ['nombre', 'ciudad','tipo_asentamiento','cp','id_municipio'];

    public function municipios()
    {
        return $this->belongsTo('App\Municipios', 'id_municipio', 'id');
    }
}
