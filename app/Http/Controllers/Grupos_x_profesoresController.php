<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grupos_x_profesores;
use App\Grupos;
use App\Users;

class Grupos_x_profesoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos_x_profesores = Grupos_x_profesores::where('status',1)->get();

        return view('Grupos_x_profesores.index')->with('grupos_x_profesores', $grupos_x_profesores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grupos = Grupos::where('status',1)->get();
        $profesores = Users::where('status',1)->where('id_tipo_user',2)->get();

        return view('Grupos_x_profesores.create')->with('grupos',$grupos)->with('profesores', $profesores);
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
        Grupos_x_profesores::create($datos);

        return redirect('/grupos_x_profesores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grupo_x_profesor = Grupos_x_profesores::find($id);

        return view('Grupos_x_profesores.read')->with('grupo_x_profesor', $grupo_x_profesor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grupo_x_profesor = Grupos_x_profesores::find($id);
        $grupos = Grupos::where('status',1)->get();
        $profesores = Users::where('status',1)->where('id_tipo_user',2)->get();

        return view('Grupos_x_profesores.edit')->with('grupo_x_profesor', $grupo_x_profesor)
        ->with('grupos', $grupos)->with('profesores', $profesores);
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
        $grupo_x_profesor = Grupos_x_profesores::find($id);
        $datos = $request->all();
        $grupo_x_profesor->update($datos);

        return redirect('/grupos_x_profesores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grupo_x_profesor = Grupos_x_profesores::find($id);
        $grupo_x_profesor->status = 0;
        $grupo_x_profesor->save();

        return redirect('/grupos_x_profesores');
    }
}
