<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipos_users;

class Tipos_usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos_users = Tipos_users::where('status', 1)->get();

        return view('Tipos_users.index')->with('tipos_users', $tipos_users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Tipos_users.create');
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
        Tipos_users::create($datos);

        return redirect('/tipos_users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipo_user = Tipos_users::find($id);

        return view('Tipos_users.read')->with('tipo_user', $tipo_user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo_user = Tipos_users::find($id);
        return view('Tipos_users.edit')->with('tipo_user', $tipo_user);
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
        $tipo_user = Tipos_users::find($id);
        $tipo_user->update($datos);

        return redirect('/tipos_users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo_user = Tipos_users::find($id);
        $tipo_user->status = 0;
        $tipo_user->save();

        return redirect('/tipos_users');
    }
}
