<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';

    protected $fillable = ['ap_paterno', 'ap_meterno','nombres','id_tipo_user',
    'correo','username','password','status'];

    public function tipos_users()
    {
        return $this->belongsTo('App\Tipos_users', 'id_tipo_user', 'id');
    }
}
