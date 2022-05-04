function validar()
{
    var ok = true;
	var color_error = "#F60A0A";
    var color_ok = "#0EF60A";
	var x = 0;
    
    var anio_examen = document.getElementById("anio_examen");
	if(anio_examen.value == "" || anio_examen.value.length > 4 || anio_examen.value < 2010)
	{
		anio_examen.style.borderColor = color_error;
		ok = false;
	}else
	{
		anio_examen.style.borderColor = color_ok;
	}

    var folio = document.getElementById("folio");
	if(folio.value == "" || folio.value.length > 10 || /^\s+$/.test(folio.value))
	{
		folio.style.borderColor = color_error;
		ok = false;
	}else
	{
		folio.style.borderColor = color_ok;
	}

    var puntaje_matematico = document.getElementById("puntaje_matematico");
	if(puntaje_matematico.value == "" || puntaje_matematico.value.length > 10 || puntaje_matematico.value < 0)
	{
		puntaje_matematico.style.borderColor = color_error;
		ok = false;
	}else
	{
		puntaje_matematico.style.borderColor = color_ok;
		x += puntaje_matematico.value;
	}

    var puntaje_analitico = document.getElementById("puntaje_analitico");
	if(puntaje_analitico.value == "" || puntaje_analitico.value.length > 10 || puntaje_analitico.value < 0)
	{
		puntaje_analitico.style.borderColor = color_error;
		ok = false;
	}else
	{
		puntaje_analitico.style.borderColor = color_ok;
		x += puntaje_analitico.value;
	}

    var puntaje_espaniol = document.getElementById("puntaje_espaniol");
	if(puntaje_espaniol.value == "" || puntaje_espaniol.value.length > 10 || puntaje_espaniol.value < 0)
	{
		puntaje_espaniol.style.borderColor = color_error;
		ok = false;
	}else
	{
		puntaje_espaniol.style.borderColor = color_ok;
		x += puntaje_espaniol.value;
	}

    var puntaje_biologia = document.getElementById("puntaje_biologia");
	if(puntaje_biologia.value == "" || puntaje_biologia.value.length > 10 || puntaje_biologia.value < 0)
	{
		puntaje_biologia.style.borderColor = color_error;
		ok = false;
	}else
	{
		puntaje_biologia.style.borderColor = color_ok;
		x += puntaje_biologia.value;
	}

    var puntaje_fisica = document.getElementById("puntaje_fisica");
	if(puntaje_fisica.value == "" || puntaje_fisica.value.length > 10 || puntaje_fisica.value < 0)
	{
		puntaje_fisica.style.borderColor = color_error;
		ok = false;
	}else
	{
		puntaje_fisica.style.borderColor = color_ok;
		x += puntaje_fisica.value;
	}

    var puntaje_historia = document.getElementById("puntaje_historia");
	if(puntaje_historia.value == "" || puntaje_historia.value.length > 10 || puntaje_historia.value < 0)
	{
		puntaje_historia.style.borderColor = color_error;
		ok = false;
	}else
	{
		puntaje_historia.style.borderColor = color_ok;
		x += puntaje_historia.value;
	}

    var puntaje_ingles = document.getElementById("puntaje_ingles");
	if(puntaje_ingles.value == "" || puntaje_ingles.value.length > 10 || puntaje_ingles.value < 0)
	{
		puntaje_ingles.style.borderColor = color_error;
		ok = false;
	}else
	{
		puntaje_ingles.style.borderColor = color_ok;
		x += puntaje_ingles.value;
	}

    var puntaje_total = document.getElementById("puntaje_total");
	if(puntaje_total.value == "" || puntaje_total.value.length > 10 || puntaje_total.value < 0)
	{
		puntaje_total.style.borderColor = color_error;
		ok = false;
	}else
	{
		puntaje_total.style.borderColor = color_ok;
		x += puntaje_total.value;
	}

    if(ok == false)
	{
		alert("Verifique los capos en rojo (probablemente falta campos o es muy grande su contenido)");
	}

    return ok;
}