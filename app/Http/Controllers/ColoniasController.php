<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Colonias;
use App\Municipios;

class ColoniasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colonias = Colonias::all();

        return view('Colonias.index')->with('colonias', $colonias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipios = Municipios::select('id','nombre')->orderBy('nombre')->get();

        return view('Colonias.create')->with('municipios',$municipios);
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
        Colonias::create($datos);

        return redirect('/colonias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $colonia = Colonias::find($id);

        return view('Colonias.read')->with('colonia', $colonia);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $colonia = Colonias::find($id);
        $municipios = Municipios::select('id','nombre')->orderBy('nombre')->get();

        return view('Colonias.edit')->with('colonia', $colonia)->with('municipios',$municipios);
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
        $colonia = Colonias::find($id);
        $colonia->update($datos);

        return redirect('/colonias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $colonia = Colonias::find($id);
        $colonia->destroy($id);
        //$pais->status = 0;
        //$pais->save();

        return redirect('/colonias');
    }
}
