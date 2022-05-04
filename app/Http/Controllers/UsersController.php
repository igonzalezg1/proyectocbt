<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\Hash;
use App\Tipos_users;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Users::where('status',1)->get();

        return view('Users.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_users = Tipos_users::where('status',1)->get();

        return view('Users.create')->with('tipos_users',$tipos_users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Users::create([
            'ap_paterno' =>$datos['ap_paterno'],
            'ap_meterno' =>$datos['ap_meterno'],
            'nombres' => $datos['nombres'],
            'id_tipo_user' => $datos['id_tipo_user'],
            'correo' => $datos['correo'],
            'username' => $datos['username'],
            'password' => Hash::make($datos['password']),
            'status' => $datos['status'],
        ]);

        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Users::find($id);

        return view('Users.read')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Users::find($id);
        $tipos_users = Tipos_users::where('status',1);

        return view('Users.edit')->with('user',$user)->with('tipos_users', $tipos_users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = $request->all();
        $user = Users::find($id);
        $user->update([
            'ap_paterno' =>$datos['ap_paterno'],
            'ap_meterno' =>$datos['ap_meterno'],
            'nombres' => $datos['nombres'],
            'id_tipo_user' => $datos['id_tipo_user'],
            'correo' => $datos['correo'],
            'username' => $datos['username'],
            'password' => Hash::make($datos['password']),
            'status' => $datos['status'],
        ]);

        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Users::find($id);
        $user->status = 0;
        $user->save();

        return redirect('/users');
    }
}
