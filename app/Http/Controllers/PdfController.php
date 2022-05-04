<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Alumnos;
use App\Bajas;
use App\Grupos;
use App\Resultados_admision;
use Facade\Ignition\ErrorPage\Renderer;

class PdfController extends Controller
{
    public function genera_pdf()
    {
        return view('pdf.listado_reportes');
    }

    public function genera_pdf_grupos()
    {
        $usuarioactual = \Auth::user();

        $grupos = Grupos::join("grupos_x_profesores", 'grupos_x_profesores.id_grupo', "=", 'grupos.id')->select('grupos.id','grupos.nombre')
        ->where('grupos_x_profesores.id_profesor', $usuarioactual->id)
        ->where('grupos_x_profesores.status',1)->get();

        return view('pdf.listado_grupos')->with('grupos', $grupos);
    }

    public function genera_pdf_resultados()
    {
        $usuarioactual = \Auth::user();

        $grupos = Grupos::join("grupos_x_profesores", 'grupos_x_profesores.id_grupo', "=", 'grupos.id')->select('grupos.id','grupos.nombre')
        ->where('grupos_x_profesores.id_profesor', $usuarioactual->id)
        ->where('grupos_x_profesores.status',1)->get();

        return view('pdf.listado_resultados')->with('grupos', $grupos);
    }

    public function crearPDFR($datos,$id_grupo,$visualizarurl,$tipo)
    {
        $data = $datos;
        $date = date('Y-m-d');
        $grupo = Grupos::where('id', $id_grupo)->first();
        $view = \View::make($visualizarurl, compact('data','date','grupo'))->Render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper('A4', 'landscape');
        if($tipo==1){return $pdf->stream('reporte');}
        if($tipo==2){return $pdf->download('reporte_resultados_'.$grupo->nombre.'.pdf');}
    }

    public function crearPDG($alumnos,$hombres,$mujeres,$id_grupo,$visualizarurl,$tipo)
    {
        $data = $alumnos;
        $date = date('Y-m-d');
        $grupo = Grupos::where('id', $id_grupo)->first();
        $view = \View::make($visualizarurl, compact('data','date','hombres','mujeres','grupo'))->Render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper('A4', 'landscape');
        if($tipo==1){return $pdf->stream('reporte');}
        if($tipo==2){return $pdf->download('reporte_grupo_'.$grupo->nombre.'.pdf');}
    }

    public function crearPDFB($datos,$bajast,$bajase,$bajasa,$bajasv,$bajasac,$bajaso,$visualizarurl,$tipo)
    {
        $data = $datos;
        $date = date('Y-m-d');
        $view = \View::make($visualizarurl, compact('data','date', 'bajast', 'bajase', 'bajasa','bajasv','bajasac','bajaso'))->Render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        if($tipo==1){return $pdf->stream('reporte');}
        if($tipo==2){return $pdf->download('reporte_bajas.pdf');}
    }

    public function crear_reporte_grupo($tipo, $id_grupo)
    {
        $vistaurl = "pdf.grupos";
        $alumnos = Alumnos::where('status',1)->where('id_grupo', $id_grupo)->get();
        $hombres = Alumnos::where('status',1)->where('id_grupo', $id_grupo)->where('genero','H')->count();
        $mujeres = Alumnos::where('status',1)->where('id_grupo', $id_grupo)->where('genero','M')->count();
        return $this->crearPDG($alumnos,$hombres,$mujeres,$id_grupo,$vistaurl, $tipo);
    }

    public function crear_reporte_bajas($tipo)
    {
        $vistaurl = "pdf.bajas";
        $alumnos = Bajas::where('status',1)->get();
        $bajast = Bajas::count();
        $bajase = Bajas::where('tipo_baja','Embarazo/Matrimonio')->count();
        $bajasa = Bajas::where('tipo_baja', 'Adicciones')->count();
        $bajasv = Bajas::where('tipo_baja', 'Violencia')->count();
        $bajasac = Bajas::where('tipo_baja', 'Academico')->count();
        $bajaso = Bajas::where('tipo_baja', 'Otro')->count();
        return $this->crearPDFB($alumnos,$bajast,$bajase,$bajasa,$bajasv,$bajasac,$bajaso,$vistaurl, $tipo);
    }

    public function crear_reporte_resultados($tipo, $id_grupo)
    {
        $grupos = Resultados_admision::join("alumnos", 'resultados_admision.id_alumno', "=", 'alumnos.id')
        ->where('alumnos.status', 1)
        ->where('alumnos.id_grupo',$id_grupo)->get();

        $vistaurl = "pdf.resultados";
        return $this->crearPDFR($grupos,$id_grupo,$vistaurl, $tipo);
    }
}
