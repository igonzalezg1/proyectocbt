<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Rutas publicas
Route::group(['middleware'=>'web'], function(){

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('inicio', function(){
        return view('welcome');
    });

    Route::get('login', 'Auth\LoginController@getLogin');

    Route::post('login', 'Auth\LoginController@postLogin');

    Route::get('combo_entidades_x_pais/{id_pais}', 'AjaxController@combo_entidades_x_pais');

    Route::get('combo_municipios_x_entidad/{id_entidad}' , 'AjaxController@combo_municipios_x_entidad');

    Route::get('combo_colonias_x_municipios/{id_municipio}', 'AjaxController@combo_colonias_x_municipios');

    Route::get('buscar_x_id/{id_alumno}', 'AjaxController@buscar_x_id');

    Route::get('buscar_x_matricula/{matricula_alumno}', 'AjaxController@buscar_x_matricula');

    Route::get('buscar_x_nombre/{nombre_alumno_b}', 'AjaxController@buscar_x_nombre');

    Route::get('buscar_nacionalidad/{nacionalidad}', 'AjaxController@buscar_nacionalidad');

    Route::get('buscar_pais/{paisr}', 'AjaxController@buscar_pais');

    Route::get('buscar_entidad/{entidadr}', 'AjaxController@buscar_entidad');

    Route::get('buscar_municipio/{municipior}', 'AjaxController@buscar_municipio');

    Route::get('buscar_colonia/{coloniar}', 'AjaxController@buscar_colonia');

    Route::get('buscar_generacion/{generacionr}', 'AjaxController@buscar_generacion');

});

//Rutas de usuarios sin conexion
Route::group(['middleware'=>'auth'], function(){

    Route::get('cerrar', 'Auth\LoginController@getLogout');

    Route::get('sin_acceso',function(){
        return view("mensajes.error_acceso")->with('msj','Sin privilegios para entrar a area de administradores.');
    });

    Route::get('sin_acceso2',function(){
        return view("mensajes.error_acceso")->with('msj','Sin privilegios para entrar a area de orientadores.');
    });

    Route::get('sin_acceso3',function(){
        return view("mensajes.error_acceso")->with('msj','Sin privilegios para entrar a area de secretarias.');
    });

});

//Todas las tablas (Opciones de Administrador).
Route::group(['middleware'=>'usuarioAdmin'], function(){

    Route::get('admin', function(){
        return view('admin');
    });

    Route::resource('paises', 'PaisesController');

    Route::resource('entidades', 'EntidadesController');

    Route::resource('municipios', 'MunicipiosController');

    Route::resource('colonias', 'ColoniasController');

    Route::resource('nacionalidades', 'NacionalidadesController');

    Route::resource('carreras', 'CarrerasController');

    Route::resource('generaciones', 'GeneracionesController');

    Route::resource('tipos_users', 'Tipos_usersController');

    Route::resource('users', 'UsersController');

    Route::resource('grupos', 'GruposController');

    Route::resource('grupos_x_profesores', 'Grupos_x_profesoresController');

    Route::get('registrars', 'cauth@getRegister');

    Route::post('registrars','cauth@postRegister');
});


//Rutas de orientadores
Route::group(['middleware'=>'usuarioOrientador'], function(){

    Route::get('indexo', 'OrientadoresController@indexo');

    Route::get('verresultadosadmi', 'OrientadoresController@verresultadosadmi');
    
    Route::get('agregarestudiante', 'OrientadoresController@agregaralumno');

    Route::get('verestselec/{alumnos}', 'OrientadoresController@verestselec');

    Route::get('vergruposor', 'OrientadoresController@vergruposor');

    Route::get('gestionbajas', 'OrientadoresController@gestionbajas');

    Route::get('vergruposelec/{id_grupo}', 'OrientadoresController@vergruposelec');

    Route::get('dardebaja/{id}', 'OrientadoresController@dardebaja');

    Route::get('vergruposelecadmin/{id_grupo}', 'OrientadoresController@vergruposelecadmin');

    Route::post('daraltaest', 'OrientadoresController@daraltaest');

    Route::post('editarinfodeest/{id}', 'OrientadoresController@editarinfodeest');

    Route::post('actualizarusuariose/{id}', 'OrientadoresController@actualizarusuariose');

    Route::post('daraltafoto', 'OrientadoresController@daraltafoto');

    Route::post('daraltacalif', 'OrientadoresController@daraltacalif');

    Route::post('opcionesbusc', 'OrientadoresController@opcionesbusc');

    Route::get('verresultadoxalu/{id_alumno}', 'OrientadoresController@verresultadoxalu');

    Route::post('crearlabaja', 'OrientadoresController@darbajadef');

    Route::get('editarinfou', 'OrientadoresController@editarinfou');

    Route::get('editaralumnoselec/{alumnos}', 'OrientadoresController@editaralumnoselec');

    Route::get('genera_pdf', 'PdfController@genera_pdf');

    Route::get('genera_pdf_grupos', 'PdfController@genera_pdf_grupos');

    Route::get('genera_pdf_resultados', 'PdfController@genera_pdf_resultados');

    Route::get('crear_reporte_bajas/{tipo}', 'PdfController@crear_reporte_bajas');

    Route::get('crear_reporte_grupo/{tipo}/{id_grupo}', 'PdfController@crear_reporte_grupo');

    Route::get('crear_reporte_resultados/{tipo}/{id_grupo}', 'PdfController@crear_reporte_resultados');
    
});


//Rutas de secreatrias
Route::group(['middleware'=>'usuarioSecretaria'], function(){

    Route::get('secretaria', 'SecretariasController@indexs');

    Route::resource('generacioness', 'GeneracionessController');

    Route::resource('grupos_x_profesoress', 'Grupos_x_profesoresControllers');

    Route::get('subirestudiantes', 'SecretariasController@subirestudiantes');

});