<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Paises;
use App\Grupos;
use App\Carreras;
use App\Nacionalidades;
use App\Generaciones;
use App\Alumnos;
use App\Fotos_alumnos;
use App\Resultados_admision;
use App\Tipos_users;
use App\Bajas;
use Illuminate\Support\Facades\Hash;

class OrientadoresController extends Controller
{
    public function indexo(){
        $usuarioactual=\Auth::user();
        return view('orientador')->with('usuarioactual', $usuarioactual);
    }

    public function agregaralumno()
    {
        $orientador = \Auth::user();
        $grupos = Grupos::join("grupos_x_profesores", 'grupos_x_profesores.id_grupo', "=", 'grupos.id')->select('grupos.id','grupos.nombre')
        ->where('grupos_x_profesores.id_profesor', $orientador->id)
        ->where('grupos_x_profesores.status',1)->get();

        $carreras = Carreras::select('nombre','id')->where('status',1)->get();
        $paises = Paises::all();
        $nacionalidades = Nacionalidades::all();
        $generaciones = Generaciones::where('status',1)->get();

        return view('opcionesorientador.agregaralumno')
        ->with('grupos', $grupos)->with('carreras', $carreras)->with('paises', $paises)
        ->with('nacionalidades',$nacionalidades)->with('generaciones', $generaciones);
    }

    public function daraltaest(Request $request)
    {
        $datos = $request->all();

        Alumnos::create($datos);
        $alumno = Alumnos::where('matricula', $datos['matricula'])->first();
        return view('opcionesorientador.agregarfoto')->with('alumno', $alumno);
    }

    public function daraltafoto(Request $request)
    {
        $datos = $request->all();

        if ($request->hasFile('ruta')) {
            $ruta = $request->file('ruta')->store('fotos_alumnos');
        }

        Fotos_alumnos::create([
            'id_alumno'=>$datos['id_alumno'],
            'ruta'=>$ruta,
            'status'=> 1]);
        $alumno = Alumnos::where('id', $datos['id_alumno'])->first();
        return view('opcionesorientador.agregarcadmision')->with('alumno', $alumno);
    }

    public function opcionesbusc(Request $request)
    {
        $datos = $request->all();
        $opcion = $datos['opciones'];
        switch ($opcion) {
            case 1:
                return view('opcionesorientador.buscar_x_id')->with('opcion', $opcion);
                break;
            case 2:
                return view('opcionesorientador.buscar_x_nombre')->with('opcion', $opcion);
                break;
            case 3:
                return view('opcionesorientador.buscar_x_grupo')->with('opcion', $opcion);
            break;
            
            default:
                return view("mensajes.error_acceso")->with("msj", "Esta opcion no es valida");
                break;
        }
    }

    public function verestselec($alumnos)
    {
        $id = $alumnos;
        $alumno = Alumnos::find($id);
        $fotoal = Fotos_alumnos::where('id_alumno', $id)->first();

        return view('opcionesorientador.veralumnoselect')->with('alumno',$alumno)->with('fotoal', $fotoal);
    }

    public function vergruposor()
    {
        $usuarioactual = \Auth::user();
        $grupos = Grupos::join("grupos_x_profesores", 'grupos_x_profesores.id_grupo', "=", 'grupos.id')->select('grupos.id','grupos.nombre')
        ->where('grupos_x_profesores.id_profesor', $usuarioactual->id)
        ->where('grupos_x_profesores.status',1)->get();

        return view('opcionesorientador.mostrarg')->with('usuarioactual', $usuarioactual)
        ->with('grupos', $grupos);
    }

    public function vergruposelec($id_grupo)
    {
        $alumnos = Alumnos::where('id_grupo',$id_grupo)->where('status',1)->get();

        return view('opcionesorientador.getalum_x')->with('alumnos',$alumnos);
    }
    
    public function daraltacalif(Request $request)
    {
        $datos = $request->all();
        Resultados_admision::create([
            'anio_examen'=>$datos['anio_examen'],
            'folio_examen'=>$datos['folio'],
            'puntaje_total'=>$datos['puntaje_total'],
            'puntaje_matematico'=>$datos['puntaje_matematico'],
            'puntaje_analitico'=>$datos['puntaje_analitico'],
            'puntaje_espaniol'=>$datos['puntaje_espaniol'],
            'puntaje_biologia'=>$datos['puntaje_biologia'],
            'puntaje_fisica'=>$datos['puntaje_fisica'],
            'puntaje_historia'=>$datos['puntaje_historia'],
            'puntaje_ingles'=>$datos['puntaje_ingles'],
            'id_alumno'=>$datos['id_alumno'],
            'status' => 1
        ]);

        $usuarioactual = \Auth::user();
        return view('orientador')->with('usuarioactual', $usuarioactual);
    }

    public function verresultadosadmi()
    {
        $usuarioactual = \Auth::user();
        $grupos = Grupos::join("grupos_x_profesores", 'grupos_x_profesores.id_grupo', "=", 'grupos.id')->select('grupos.id','grupos.nombre')
        ->where('grupos_x_profesores.id_profesor', $usuarioactual->id)
        ->where('grupos_x_profesores.status',1)->get();

        return view('opcionesorientador.verresultadosadmin')->with('usuarioactual', $usuarioactual)
        ->with('grupos', $grupos);
    }

    public function vergruposelecadmin($id_grupo)
    {
        $alumnos = Alumnos::join("resultados_admision", 'alumnos.id', "=",'resultados_admision.id_alumno')
        ->where('alumnos.status', 1)->where('alumnos.id_grupo', $id_grupo)->get();

        return view('opcionesorientador.vergrupores')->with('alumnos', $alumnos);
    }

    public function verresultadoxalu($id_alumno)
    {
        $resultados = Resultados_admision::where('folio_examen', $id_alumno)->first();

        return view('opcionesorientador.mresxal')->with('resultados', $resultados);
    }

    public function editarinfou()
    {
        $user = \Auth::user();

        $tipos_users = Tipos_users::where('status',1)->get();

        return view('opcionesorientador.editarinfou')->with('user', $user)->with('tipos_users', $tipos_users);
    }

    public function actualizarusuariose(Request $request, $id)
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

        $usuarioactual = \Auth::user();
        return redirect('/indexo');
    }

    public function editaralumnoselec($alumnos)
    {
        $alumno = Alumnos::find($alumnos);
        $foto_alumno = Fotos_alumnos::where('id_alumno', $alumno->id)->first();

        $paises = Paises::all();

        return view('opcionesorientador.editarAlumno')
        ->with('alumno', $alumno)->with('foto_alumno', $foto_alumno)->with('paises', $paises);
    }

    public function editarinfodeest(Request $request, $id)
    {
        $datos = $request->all();
        $alumno = Alumnos::find($id);

        $alumno->update([
            'telefono' => $datos['telefono'],
            'celular' => $datos['celular'],
            'correo' => $datos['correo'],
            'facebook' => $datos['facebook'],
            'twitter' => $datos['twitter'],
            'edocivil' => $datos['edocivil'],
            'direccion' => $datos['direccion'],
            'id_pais' => $datos['id_pais'],
            'id_entidad' => $datos['id_entidad'],
            'id_municipio' => $datos['id_municipio'],
            'id_colonia' => $datos['id_colonia'],
            'observacion_direccion' => $datos['observacion_direccion'],
            'calle_1' => $datos['calle_1'],
            'calle_2' => $datos['calle_2'],
            'telefono_tutor' => $datos['telefono_tutor'],
            'celular_tutor' => $datos['celular_tutor'],
            'correo_tutor' => $datos['correo_tutor'],
            'direccion_tutor' => $datos['direccion_tutor'],
            'id_pais_tutor' => $datos['id_pais_tutor'],
            'id_entidad_tutor' => $datos['id_entidad_tutor'],
            'id_municipio_tutor' => $datos['id_municipio_tutor'],
            'id_colonia_tutor' => $datos['id_colonia_tutor'],
            'observacion_direccion_tutor' => $datos['observacion_direccion_tutor'],
            'calle_1_tutor' => $datos['calle_1_tutor'],
            'calle_2_tutor' => $datos['calle_2_tutor'],
        ]);
        return redirect('/indexo');
    }

    public function dardebaja($id)
    {
        $alumno = Alumnos::find($id);

        return view('opcionesorientador.dardebaja')->with('alumno', $alumno);
    }

    public function darbajadef(Request $request)
    {
        $datos = $request->all();
        $alumno = Alumnos::find($datos['id_alumno']);
        $alumno->status = 0;
        $alumno->save();

        Bajas::create([
            'id_alumno' => $datos['id_alumno'],
            'tipo_baja' => $datos['tipo_baja'],
            'status' => '1',
        ]);

        return redirect('/indexo');
    }

    public function gestionbajas()
    {
        $bajas = Bajas::where('status',1)->get();

        return view('opcionesorientador.mostrarBajas')->with('bajas', $bajas);
    }
}
