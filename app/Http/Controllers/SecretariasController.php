<?php

namespace App\Http\Controllers;

use App\Alumnos;
use Illuminate\Http\Request;

class SecretariasController extends Controller
{
    public function indexs()
    {
        $usuarioactual=\Auth::user();
        return view('secretaria')->with('usuarioactual', $usuarioactual);
    }

    public function subirestudiantes()
    {
        $alumnos = Alumnos::where('status',1)->get();
        foreach($alumnos as $alumno)
        {
            if($alumno->semestre < 6)
            {
                if(($alumno->semestre % 2) == 0)
                {
                    $alumno->id_grupo += 4;
                    $alumno->edad ++;
                    $alumno->edad_tutor ++;
                    $alumno->save();
                }
                $alumno->semestre ++;
                $alumno->save();
            }
            if($alumno->semestre >= 6)
            {
                $alumno->status = 2;
                $alumno->save();
            }
        }
        return redirect('/inicio');
    }
}
