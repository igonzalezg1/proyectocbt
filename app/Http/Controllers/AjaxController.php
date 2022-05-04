<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entidades;
use App\Paises;
use App\Municipios;
use App\Generaciones;
use App\Colonias;
use App\Nacionalidades;
use App\Alumnos;

class AjaxController extends Controller
{
    public function combo_entidades_x_pais($id_pais)
    {
        $entidades = Entidades::select('id','nombre')
        ->where('id_pais', $id_pais)->get();

        return $entidades;
    }

    public function combo_municipios_x_entidad($id_entidad)
    {
        $municipios = Municipios::select('id', 'nombre')
        ->where('id_entidad', $id_entidad)->get();

        return $municipios;
    }

    public function combo_colonias_x_municipios($id_municipio)
    {
        $colonias = Colonias::where('id_municipio', $id_municipio)->get();

        return $colonias;
    }

    public function buscar_x_id($id_alumno)
    {
        $alumnos = Alumnos::join("fotos_alumnos", 'fotos_alumnos.id_alumno', "=", 'alumnos.id')
        ->where('alumnos.id', $id_alumno)->first();

        return $alumnos;
    }

    public function buscar_x_matricula($matricula_alumno)
    {
        $busqueda = '%'.$matricula_alumno.'%';
        $alumnos = Alumnos::where('matricula', 'LIKE', $matricula_alumno)->get();

        return $alumnos;
    }

    public function buscar_x_nombre($nombre_alumno_b)
    {
        $busqueda = '%'.$nombre_alumno_b.'%';
        $alumnos = Alumnos::where('nombres', 'LIKE', $busqueda)->get();

        return $alumnos;
    }

    public function buscar_nacionalidad($nacionalidad)
    {
        $nacionalid = Nacionalidades::find($nacionalidad);

        return $nacionalid;
    }

    public function buscar_pais($paisr)
    {
        $paisres = Paises::find($paisr);

        return $paisres;
    }

    public function buscar_entidad($entidadr)
    {
        $entidadres = Entidades::find($entidadr);

        return $entidadres;
    }

    public function buscar_municipio($municipior)
    {
        $municipiores = Municipios::find($municipior);

        return $municipiores;
    }

    public function buscar_colonia($coloniar)
    {
        $coloniares = Colonias::find($coloniar);

        return $coloniares;
    }

    public function buscar_generacion($generacionr)
    {
        $generacionres = Generaciones::find($generacionr);

        return $generacionres;
    }
}
