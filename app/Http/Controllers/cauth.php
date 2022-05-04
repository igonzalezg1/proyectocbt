<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Tipos_users;
use Validator;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Session;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class cauth extends Controller
{

    public function getRegister()
    {
        return view("register");
    }

    public function postRegister(Request $request)
    {
        $datos = $request->all();
        Users::create([
            'ap_paterno'=>$datos['ap_paterno'],
            'ap_meterno'=>$datos['ap_meterno'],
            'nombres'=>$datos['nombres'],
            'id_tipo_user'=>$datos['id_tipo_user'],
            'correo'=>$datos['correo'],
            'username'=>$datos['username'],
            'password'=>Hash::make($datos['password']),
            'status'=>$datos['status'],
        ]);

        return view("welcome");
    }
}
