<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paises;
use App\Entidades;
use App\Municipios;
use App\Colonias;
use App\Grupos;
use App\Carreras;
use App\Nacionalidades;
use App\Generaciones;
use App\Alumnos;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumnos::where('status',1)->get();

        return view('Alumnos.index')->with('alumnos', $alumnos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paises = Paises::all();
        $entidades = Entidades::all();
        $municipios = Municipios::all();
        $colonias = Colonias::all();
        $grupos = Grupos::where('status',1)->get();;
        $carreras = Carreras::where('status',1)->get();
        $nacionalidades = Nacionalidades::all();
        $generaciones = Generaciones::where('status',1)->get();

        return view('Alumnos.create')->with('paises',$paises)->with('entidades', $entidades)
        ->with('municipios',$municipios)->with('colonias',$colonias)->with('grupos', $grupos)
        ->with('carreras', $carreras)->with('nacionaidades',$nacionalidades)
        ->with('generaciones',$generaciones);
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
        Alumnos::create($datos);

        return redirect('/alumnos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno = Alumnos::find($id);

        return view('Alumnos.read')->with('alumno', $alumno);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno = Alumnos::find($id);
        $paises = Paises::all();
        $entidades = Entidades::all();
        $municipios = Municipios::all();
        $colonias = Colonias::all();
        $grupos = Grupos::where('status',1)->get();;
        $carreras = Carreras::where('status',1)->get();
        $nacionalidades = Nacionalidades::all();
        $generaciones = Generaciones::where('status',1)->get();

        return view('Alumnos.edit')->with('alumno',$alumno)->with('paises',$paises)
        ->with('entidades', $entidades)->with('municipios',$municipios)->with('colonias',$colonias)
        ->with('grupos', $grupos)->with('carreras', $carreras)->with('nacionaidades',$nacionalidades)
        ->with('generaciones',$generaciones);
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
        $alumno = Alumnos::find($id);
        $datos = $request->all();
        $alumno->update($datos);

        return redirect('/alumnos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno = Alumnos::find($id);
        $alumno->status = 0;
        $alumno->save();

        return redirect('/alumnos');
    }
}
