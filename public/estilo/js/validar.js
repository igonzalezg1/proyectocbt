function validar()
{
	var ok = true;
	var color_error = "#F60A0A";
    var color_ok = "#0EF60A";

    var ap_paterno = document.getElementById("ap_paterno");
	if(ap_paterno.value == "" || ap_paterno.value.length > 30 || /^\s+$/.test(ap_paterno.value))
	{
		ap_paterno.style.borderColor = color_error;
		ok = false;
	}else
	{
		ap_paterno.style.borderColor = color_ok;
	}

	var ap_meterno = document.getElementById("ap_meterno");
	if(ap_meterno.value == "" || ap_meterno.value.length > 30 || /^\s+$/.test(ap_meterno.value))
	{
		ap_meterno.style.borderColor = color_error;
		ok = false;
	}else
	{
		ap_meterno.style.borderColor = color_ok;
	}

	var nombres = document.getElementById("nombres");
	if(nombres.value == "" || nombres.value.length > 30 || /^\s+$/.test(nombres.value))
	{
		nombres.style.borderColor = color_error;
		ok = false;
	}else
	{
		nombres.style.borderColor = color_ok;
	}

	var curp = document.getElementById("curp");
	if(curp.value == "" || curp.value.length > 18 || curp.value.length <18)
	{
		curp.style.borderColor = color_error;
		alert("La CURP debe tener 18 caracteres");
		ok = false;
	}else
	{
		curp.style.borderColor = color_ok;
	}

	var genero = document.getElementById("genero");
	if(genero.value == "" || genero.value.length > 30 || /^\s+$/.test(genero.value))
	{
		genero.style.borderColor = color_error;
		ok = false;
	}else
	{
		genero.style.borderColor = color_ok;
	}

	var semestre = document.getElementById("semestre");
	if(semestre.value == "" || semestre.value.length > 18 || semestre.value >12 || semestre.value < 1)
	{
		semestre.style.borderColor = color_error;
		alert("El semestre debe ser maximo de 12 y minimo de 1");
		ok = false;
	}else
	{
		semestre.style.borderColor = color_ok;
	}

	var id_grupo = document.getElementById("id_grupo");
	if(id_grupo.value == "" || id_grupo.value.length > 18)
	{
		id_grupo.style.borderColor = color_error;
		ok = false;
	}else
	{
		id_grupo.style.borderColor = color_ok;
	}

	var edad = document.getElementById("edad");
	if(edad.value == "" || edad.value.length > 30 || edad.value < 14 || edad.value > 30)
	{
		edad.style.borderColor = color_error;
		alert("La edad debe ser entre 14 y 30 años");
		ok = false;
	}else
	{
		edad.style.borderColor = color_ok;
	}

	var id_carrera = document.getElementById("id_carrera");
	if(id_carrera.value == "" || id_carrera.value.length > 30)
	{
		id_carrera.style.borderColor = color_error;
		ok = false;
	}else
	{
		id_carrera.style.borderColor = color_ok;
	}

	var matricula = document.getElementById("matricula");
	if(matricula.value == "" || matricula.value.length > 30 || /^\s+$/.test(matricula.value))
	{
		matricula.style.borderColor = color_error;
		ok = false;
	}else
	{
		matricula.style.borderColor = color_ok;
	}

	var telefono = document.getElementById("telefono");
	if(telefono.value == "" || telefono.value.length > 10 || telefono.value.length < 10)
	{
		telefono.style.borderColor = color_error;
		alert("El telefono debe de ser de 10 caracteres");
		ok = false;
	}else
	{
		telefono.style.borderColor = color_ok;
	}

	var celular = document.getElementById("celular");
	if(celular.value == "" || celular.value.length > 10 || celular.value.length < 10)
	{
		celular.style.borderColor = color_error;
		alert("El celular debe de ser de 10 caracteres");
		ok = false;
	}else
	{
		celular.style.borderColor = color_ok;
	}

	var correo = document.getElementById("correo");
	if(correo.value == "" || correo.value.length > 100 || /^\s+$/.test(correo.value))
	{
		correo.style.borderColor = color_error;
		ok = false;
	}else
	{
		correo.style.borderColor = color_ok;
	}

	var facebook = document.getElementById("facebook");
	if(facebook.value == "" || facebook.value.length > 30 || /^\s+$/.test(facebook.value))
	{
		facebook.style.borderColor = color_error;
		ok = false;
	}else
	{
		facebook.style.borderColor = color_ok;
	}

	var twitter = document.getElementById("twitter");
	if(twitter.value == "" || twitter.value.length > 30 || /^\s+$/.test(twitter.value))
	{
		twitter.style.borderColor = color_error;
		ok = false;
	}else
	{
		twitter.style.borderColor = color_ok;
	}

	var edocivil = document.getElementById("edocivil");
	if(edocivil.value == "" || edocivil.value.length > 30 || /^\s+$/.test(edocivil.value))
	{
		edocivil.style.borderColor = color_error;
		ok = false;
	}else
	{
		edocivil.style.borderColor = color_ok;
	}

	var id_nacionalidad = document.getElementById("id_nacionalidad");
	if(id_nacionalidad.value == "" || id_nacionalidad.value.length > 30 || /^\s+$/.test(id_nacionalidad.value))
	{
		id_nacionalidad.style.borderColor = color_error;
		ok = false;
	}else
	{
		id_nacionalidad.style.borderColor = color_ok;
	}

	var idiomas = document.getElementById("idiomas");
	if(idiomas.value == "" || idiomas.value.length > 30 || /^\s+$/.test(idiomas.value))
	{
		idiomas.style.borderColor = color_error;
		ok = false;
	}else
	{
		idiomas.style.borderColor = color_ok;
	}

	var tipo_sangre = document.getElementById("tipo_sangre");
	if(tipo_sangre.value == "" || tipo_sangre.value.length > 30 || /^\s+$/.test(tipo_sangre.value))
	{
		tipo_sangre.style.borderColor = color_error;
		ok = false;
	}else
	{
		tipo_sangre.style.borderColor = color_ok;
	}

	var no_seguro = document.getElementById("no_seguro");
	if(no_seguro.value == "" || no_seguro.value.length > 30 || /^\s+$/.test(no_seguro.value))
	{
		no_seguro.style.borderColor = color_error;
		ok = false;
	}else
	{
		no_seguro.style.borderColor = color_ok;
	}

	var status_pago = document.getElementById("status_pago");
	if(status_pago.value == "" || status_pago.value.length > 30 || /^\s+$/.test(status_pago.value))
	{
		status_pago.style.borderColor = color_error;
		ok = false;
	}else
	{
		status_pago.style.borderColor = color_ok;
	}

	var id_generacion = document.getElementById("id_generacion");
	if(id_generacion.value == "" || id_generacion.value.length > 30 || /^\s+$/.test(id_generacion.value))
	{
		id_generacion.style.borderColor = color_error;
		ok = false;
	}else
	{
		id_generacion.style.borderColor = color_ok;
	}

	var status = document.getElementById("status");
	if(status.value == "" || status.value.length > 30 || /^\s+$/.test(status.value))
	{
		status.style.borderColor = color_error;
		ok = false;
	}else
	{
		status.style.borderColor = color_ok;
	}

	var direccion = document.getElementById("direccion");
	if(direccion.value == "" || direccion.value.length > 30 || /^\s+$/.test(direccion.value))
	{
		direccion.style.borderColor = color_error;
		ok = false;
	}else
	{
		direccion.style.borderColor = color_ok;
	}

	var id_pais = document.getElementById("id_pais");
	if(id_pais.value == "" || id_pais.value.length > 30 || /^\s+$/.test(id_pais.value))
	{
		id_pais.style.borderColor = color_error;
		ok = false;
	}else
	{
		id_pais.style.borderColor = color_ok;
	}

	var id_entidad = document.getElementById("id_entidad");
	if(id_entidad.value == "" || id_entidad.value.length > 30 || /^\s+$/.test(id_entidad.value))
	{
		id_entidad.style.borderColor = color_error;
		ok = false;
	}else
	{
		id_entidad.style.borderColor = color_ok;
	}

	var id_municipio = document.getElementById("id_municipio");
	if(id_municipio.value == "" || id_municipio.value.length > 30 || /^\s+$/.test(id_municipio.value))
	{
		id_municipio.style.borderColor = color_error;
		ok = false;
	}else
	{
		id_municipio.style.borderColor = color_ok;
	}

	var id_colonia = document.getElementById("id_colonia");
	if(id_colonia.value == "" || id_colonia.value.length > 30 || /^\s+$/.test(id_colonia.value))
	{
		id_colonia.style.borderColor = color_error;
		ok = false;
	}else
	{
		id_colonia.style.borderColor = color_ok;
	}

	var observacion_direccion = document.getElementById("observacion_direccion");
	if(observacion_direccion.value == "" || observacion_direccion.value.length > 30 || /^\s+$/.test(observacion_direccion.value))
	{
		observacion_direccion.style.borderColor = color_error;
		ok = false;
	}else
	{
		observacion_direccion.style.borderColor = color_ok;
	}

	var calle_1 = document.getElementById("calle_1");
	if(calle_1.value == "" || calle_1.value.length > 30 || /^\s+$/.test(calle_1.value))
	{
		calle_1.style.borderColor = color_error;
		ok = false;
	}else
	{
		calle_1.style.borderColor = color_ok;
	}

	var calle_2 = document.getElementById("calle_2");
	if(calle_2.value == "" || calle_2.value.length > 30 || /^\s+$/.test(calle_2.value))
	{
		calle_2.style.borderColor = color_error;
		ok = false;
	}else
	{
		calle_2.style.borderColor = color_ok;
	}

	var ap_paterno_tutor = document.getElementById("ap_paterno_tutor");
	if(ap_paterno_tutor.value == "" || ap_paterno_tutor.value.length > 30 || /^\s+$/.test(ap_paterno_tutor.value))
	{
		ap_paterno_tutor.style.borderColor = color_error;
		ok = false;
	}else
	{
		ap_paterno_tutor.style.borderColor = color_ok;
	}

	var ap_meterno_tutor = document.getElementById("ap_meterno_tutor");
	if(ap_meterno_tutor.value == "" || ap_meterno_tutor.value.length > 30 || /^\s+$/.test(ap_meterno_tutor.value))
	{
		ap_meterno_tutor.style.borderColor = color_error;
		ok = false;
	}else
	{
		ap_meterno_tutor.style.borderColor = color_ok;
	}

	var nombres_tutor = document.getElementById("nombres_tutor");
	if(nombres_tutor.value == "" || nombres_tutor.value.length > 30 || /^\s+$/.test(nombres_tutor.value))
	{
		nombres_tutor.style.borderColor = color_error;
		ok = false;
	}else
	{
		nombres_tutor.style.borderColor = color_ok;
	}

	var parentezco_tutor = document.getElementById("parentezco_tutor");
	if(parentezco_tutor.value == "" || parentezco_tutor.value.length > 30 || /^\s+$/.test(parentezco_tutor.value))
	{
		parentezco_tutor.style.borderColor = color_error;
		ok = false;
	}else
	{
		parentezco_tutor.style.borderColor = color_ok;
	}

	var edad_tutor = document.getElementById("edad_tutor");
	if(edad_tutor.value == "" || edad_tutor.value.length > 30 || edad_tutor.value < 18 || edad_tutor.value > 80)
	{
		edad_tutor.style.borderColor = color_error;
		alert("El tutor debe ser mayor de edad (18 años)");
		ok = false;
	}else
	{
		edad_tutor.style.borderColor = color_ok;
	}

	var ine_tutor = document.getElementById("ine_tutor");
	if(ine_tutor.value == "" || ine_tutor.value.length > 18)
	{
		ine_tutor.style.borderColor = color_error;
		ok = false;
	}else
	{
		ine_tutor.style.borderColor = color_ok;
	}

	var curp_tutor = document.getElementById("curp_tutor");
	if(curp_tutor.value == "" || curp_tutor.value.length > 18 || curp_tutor.value.length <18)
	{
		curp_tutor.style.borderColor = color_error;
		alert("La CURP debe tener 18 caracteres");
		ok = false;
	}else
	{
		curp_tutor.style.borderColor = color_ok;
	}

	var genero_tutor = document.getElementById("genero_tutor");
	if(genero_tutor.value == "" || genero_tutor.value.length > 30 || /^\s+$/.test(genero_tutor.value))
	{
		genero_tutor.style.borderColor = color_error;
		ok = false;
	}else
	{
		genero_tutor.style.borderColor = color_ok;
	}

	var edocivil_tutor = document.getElementById("edocivil_tutor");
	if(edocivil_tutor.value == "" || edocivil_tutor.value.length > 30 || /^\s+$/.test(edocivil_tutor.value))
	{
		edocivil_tutor.style.borderColor = color_error;
		ok = false;
	}else
	{
		edocivil_tutor.style.borderColor = color_ok;
	}

	var ocupacion_tutor = document.getElementById("ocupacion_tutor");
	if(ocupacion_tutor.value == "" || ocupacion_tutor.value.length > 30 || /^\s+$/.test(ocupacion_tutor.value))
	{
		ocupacion_tutor.style.borderColor = color_error;
		ok = false;
	}else
	{
		ocupacion_tutor.style.borderColor = color_ok;
	}

	var estudios_tutor = document.getElementById("estudios_tutor");
	if(estudios_tutor.value == "" || estudios_tutor.value.length > 30 || /^\s+$/.test(estudios_tutor.value))
	{
		estudios_tutor.style.borderColor = color_error;
		ok = false;
	}else
	{
		estudios_tutor.style.borderColor = color_ok;
	}

	var telefono = document.getElementById("telefono_tutor");
	if(telefono.value == "" || telefono.value.length > 10 || telefono.value.length < 10)
	{
		telefono.style.borderColor = color_error;
		alert("El telefono debe de ser de 10 caracteres");
		ok = false;
	}else
	{
		telefono.style.borderColor = color_ok;
	}

	var celular = document.getElementById("celular_tutor");
	if(celular.value == "" || celular.value.length > 10 || celular.value.length < 10)
	{
		celular.style.borderColor = color_error;
		alert("El celular debe de ser de 10 caracteres");
		ok = false;
	}else
	{
		celular.style.borderColor = color_ok;
	}

	var correo = document.getElementById("correo_tutor");
	if(correo.value == "" || correo.value.length > 100 || /^\s+$/.test(correo.value))
	{
		correo.style.borderColor = color_error;
		ok = false;
	}else
	{
		correo.style.borderColor = color_ok;
	}

	var direccion = document.getElementById("direccion_tutor");
	if(direccion.value == "" || direccion.value.length > 30 || /^\s+$/.test(direccion.value))
	{
		direccion.style.borderColor = color_error;
		ok = false;
	}else
	{
		direccion.style.borderColor = color_ok;
	}

	var id_pais = document.getElementById("id_pais_tutor");
	if(id_pais.value == "" || id_pais.value.length > 30 || /^\s+$/.test(id_pais.value))
	{
		id_pais.style.borderColor = color_error;
		ok = false;
	}else
	{
		id_pais.style.borderColor = color_ok;
	}

	var id_entidad = document.getElementById("id_entidad_tutor");
	if(id_entidad.value == "" || id_entidad.value.length > 30 || /^\s+$/.test(id_entidad.value))
	{
		id_entidad.style.borderColor = color_error;
		ok = false;
	}else
	{
		id_entidad.style.borderColor = color_ok;
	}

	var id_municipio = document.getElementById("id_municipio_tutor");
	if(id_municipio.value == "" || id_municipio.value.length > 30 || /^\s+$/.test(id_municipio.value))
	{
		id_municipio.style.borderColor = color_error;
		ok = false;
	}else
	{
		id_municipio.style.borderColor = color_ok;
	}

	var id_colonia = document.getElementById("id_colonia_tutor");
	if(id_colonia.value == "" || id_colonia.value.length > 30 || /^\s+$/.test(id_colonia.value))
	{
		id_colonia.style.borderColor = color_error;
		ok = false;
	}else
	{
		id_colonia.style.borderColor = color_ok;
	}

	var observacion_direccion = document.getElementById("observacion_direccion_tutor");
	if(observacion_direccion.value == "" || observacion_direccion.value.length > 30 || /^\s+$/.test(observacion_direccion.value))
	{
		observacion_direccion.style.borderColor = color_error;
		ok = false;
	}else
	{
		observacion_direccion.style.borderColor = color_ok;
	}

	var calle_1 = document.getElementById("calle_1_tutor");
	if(calle_1.value == "" || calle_1.value.length > 30 || /^\s+$/.test(calle_1.value))
	{
		calle_1.style.borderColor = color_error;
		ok = false;
	}else
	{
		calle_1.style.borderColor = color_ok;
	}

	var calle_2 = document.getElementById("calle_2_tutor");
	if(calle_2.value == "" || calle_2.value.length > 30 || /^\s+$/.test(calle_2.value))
	{
		calle_2.style.borderColor = color_error;
		ok = false;
	}else
	{
		calle_2.style.borderColor = color_ok;
	}

	if(ok == false)
	{
		alert("Verifique los capos en rojo (probablemente falta campos o es muy grande su contenido)");
	}

	return ok;
}