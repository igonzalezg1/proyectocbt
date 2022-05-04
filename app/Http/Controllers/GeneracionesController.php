<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Generaciones;

class GeneracionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generaciones = Generaciones::where('status', 1)->get();

        return view('Generaciones.index')->with('generaciones', $generaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Generaciones.create');
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
        Generaciones::create($datos);
        return redirect('/generaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $generacion = Generaciones::find($id);
        return view('Generaciones.read')->with('generacion', $generacion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $generacion = Generaciones::find($id);
        return view('Generaciones.edit')->with('generacion', $generacion);
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
        $generacion = Generaciones::find($id);
        $generacion->update($datos);
        return redirect('/generaciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $generacion = Generaciones::find($id);
        $generacion->status = 0;
        $generacion->save();

        return redirect('/generaciones');
    }
}
