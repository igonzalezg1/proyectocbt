<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nacionalidades extends Model
{
    protected $table = 'nacionalidades';

    protected $fillable = ['nombre', 'id_pais'];

    public function paises()
    {
        return $this->belongsTo('App\Paises', 'id_pais', 'id');
    }
}
