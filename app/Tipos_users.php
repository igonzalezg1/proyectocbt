<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipos_users extends Model
{
    protected $table = 'tipos_users';

    protected $fillable = ['nombre', 'status'];
}
