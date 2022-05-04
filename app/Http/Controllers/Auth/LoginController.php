<?php

namespace App\Http\Controllers\Auth;

use App\Users;
use App\Tipos_users;
use Validator;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Session;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your ` screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('guest')->except('getLogout');
    }

    public function getLogin()
    {
        return view("login");
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'username'=>'required',
            'password'=>'required',
        ]);

        $credentials = $request->only('username','password');
        if ($this->auth->attempt($credentials, $request->has('remember'))) {
            $usuarioactual = \Auth::user();
            return view("welcome")->with("usuario", $usuarioactual);
        }

        return view("mensajes.error_acceso")->with("msj", "Usuario o contraseña incorrectas.");
    }

    public function getLogout()
    {
        $this->auth->logout();
        Session::flush();

        return redirect("inicio");
    }

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

        return redirect("login");
    }
}
