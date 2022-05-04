<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Nacionalidades;
use App\Paises;

class NacionalidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nacionalidades = Nacionalidades::all();

        return view('Nacionalidades.index')->with('nacionalidades', $nacionalidades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paises = Paises::select('id','nombre')->orderBy('nombre')->get();

        return view('Nacionalidades.create')->with('paises',$paises);
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
        Nacionalidades::create($datos);

        return redirect('/nacionalidades');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nacionalidad = Nacionalidades::find($id);

        return view('Nacionalidades.read')->with('nacionalidad', $nacionalidad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nacionalidad = Nacionalidades::find($id);
        $paises = Paises::select('id','nombre')->orderBy('nombre')->get();

        return view('Nacionalidades.edit')->with('nacionalidad', $nacionalidad)
                                          ->with('paises',$paises);
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
        $nacionalidad = Nacionalidades::find($id);
        $nacionalidad->update($datos);

        return redirect('/nacionalidades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nacionalidad = Nacionalidades::find($id);
        $nacionalidad->destroy($id);
        //$pais->status = 0;
        //$pais->save();

        return redirect('/nacionalidades');
    }
}
