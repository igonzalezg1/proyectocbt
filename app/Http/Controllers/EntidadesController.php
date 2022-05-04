<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paises;
use App\Entidades;

class EntidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entidades = Entidades::all();
        
        return view('Entidades.index')->with('entidades', $entidades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paises = Paises::select('id','nombre')->orderBy('nombre')->get();
        return view('Entidades.create')->with('paises', $paises);
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
        Entidades::create($datos);

        return redirect('/entidades');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entidad = Entidades::find($id);
        
        return view('Entidades.read')->with('entidad', $entidad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entidad = Entidades::find($id);
        $paises = Paises::select('id','nombre')->orderBy('nombre')->get();

        return view('Entidades.edit')->with('entidad', $entidad)->with('paises',$paises);
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
        $entidad = Entidades::find($id);
        $entidad->update($datos);

        return redirect('/entidades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entidad = Entidades::find($id);
        $entidad->destroy($id);
        //$pais->status = 0;
        //$pais->save();

        return redirect('/entidades');
    }
}
