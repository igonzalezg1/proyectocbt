function validar()
{
    var ok = true;
	var color_error = "#F60A0A";
    var color_ok = "#0EF60A";
	var x = 0;
    
    var telefono = document.getElementById("telefono");
	if(telefono.value == "" || telefono.value.length > 10 || telefono.value.length < 10)
	{
		telefono.style.borderColor = color_error;
		ok = false;
	}else
	{
		telefono.style.borderColor = color_ok;
	}

    var celular = document.getElementById("celular");
	if(celular.value == "" || celular.value.length > 10 || celular.value.length < 10)
	{
		celular.style.borderColor = color_error;
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