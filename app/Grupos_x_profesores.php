<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupos_x_profesores extends Model
{
    protected $table = 'grupos_x_profesores';

    protected $fillable = ['id_grupo', 'id_profesor','status'];

    public function grupos()
    {
        return $this->belongsTo('App\Grupos', 'id_grupo', 'id');
    }

    public function profesores()
    {
        return $this->belongsTo('App\Users', 'id_profesor', 'id');
    }
}
