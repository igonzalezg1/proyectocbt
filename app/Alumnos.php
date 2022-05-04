<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    protected $table = 'alumnos';

    protected $fillable = ['ap_paterno', 'ap_meterno','nombres','curp',
    'genero','fecha_nacimiento','edad','id_grupo','semestre','id_carrera','matricula','telefono',
    'celular','correo','facebook','twitter','edocivil','id_nacionalidad','idiomas','tipo_sangre',
    'no_seguro','status_pago','direccion','id_pais','id_entidad','id_municipio','id_colonia',
    'observacion_direccion','calle_1','calle_2','id_generacion','ap_paterno_tutor','ap_meterno_tutor',
    'nombres_tutor','parentezco_tutor','fecha_nacimiento_tutor','edad_tutor','ine_tutor','curp_tutor',
    'genero_tutor','edocivil_tutor','ocupacion_tutor','estudios_tutor','telefono_tutor','celular_tutor',
    'correo_tutor','direccion_tutor','id_pais_tutor','id_entidad_tutor','id_municipio_tutor',
    'id_colonia_tutor','observacion_direccion_tutor','calle_1_tutor','calle_2_tutor','status'];

    public function grupos()
    {
        return $this->belongsTo('App\Grupos', 'id_grupo', 'id');
    }

    public function carreras()
    {
        return $this->belongsTo('App\Carreras', 'id_carrera', 'id');
    }

    public function nacionalidades()
    {
        return $this->belongsTo('App\Nacionalidades', 'id_nacionalidad', 'id');
    }

    public function generaciones()
    {
        return $this->belongsTo('App\Generaciones', 'id_generacion', 'id');
    }

    public function paises()
    {
        return $this->belongsTo('App\Paises', 'id_pais', 'id');
    }
    
    public function entidades()
    {
        return $this->belongsTo('App\Entidades', 'id_entidad', 'id');
    }

    public function municipios()
    {
        return $this->belongsTo('App\Municipios', 'id_municipio', 'id');
    }

    public function colonias()
    {
        return $this->belongsTo('App\Colonias', 'id_colonia', 'id');
    }

    public function paisestutor()
    {
        return $this->belongsTo('App\Paises', 'id_pais_tutor', 'id');
    }
    
    public function entidadestutor()
    {
        return $this->belongsTo('App\Entidades', 'id_entidad_tutor', 'id');
    }

    public function municipiostutor()
    {
        return $this->belongsTo('App\Municipios', 'id_municipio_tutor', 'id');
    }

    public function coloniastutor()
    {
        return $this->belongsTo('App\Colonias', 'id_colonia_tutor', 'id');
    }
}
