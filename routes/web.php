<?php

use App\BannerAdmin;
use App\ContentAdmin;

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

Route::get('home', function () {
    return view('home');
});

// Ruta para mostrar banners en portada
Route::get('/', function () {
	
	$banner = BannerAdmin::all();

	$content = ContentAdmin::all();

	//dd($banner, $content);

    return view('inicio')->with(compact('banner', 'content'));

});

/*Route::get('/', function () {
    return view('inicio');
});*/

Route::get('iniciativa', function () {
	return view('ipac.iniciativa.inicio');
});

Route::get('beneficios', function () {
	return view('ipac.beneficios.inicio');
});

Route::get('criterios', function () {
	return view('ipac.criterios.inicio');
});

Route::get('transparencia', function () {
	return view('transparencia.inicio');
});

Route::get('gobiernoabierto', function () {
	return view('gobiernoabierto.inicio');
});

Route::get('organo-encargado', function () {
	return view('ipac.organoencargado.inicio');
});

// Rutas para ciudadanos crear propuestas...

Route::get('proponer', function () {
	return view('propuestas.proponer.inicio');
});

Route::get('crear-propuesta', [	
	'as'			=>	'portada.proponer',
	'uses'			=>	'ProposalController@create'
]);

// Rutas de registro de propuestas...
Route::get('propuestas', [	
	'as'			=>	'propuestas.crear',
	'uses'			=>	'ProposalController@create'
]);

Route::post('guardar-propuestas', [	
	'as'			=>	'propuestas.guardar',
	'uses'			=>	'ProposalController@store'
]);

Route::post('select-ajax', [
	'as'=>'select-ajax',
	'uses'=>'ProposalController@selectAjax'
]);

Route::patch('admin-select-ajax', [
	'as'=>'admin-select-ajax',
	'uses'=>'Admin\ProposalController@selectAjax'
]);

// Rutas de autenticación de ciudadanos...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Rutas de control de registro de ciudadanos...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

//Route::post('register', 'Auth\RegisterController@register');

//Ruta para ciudadanos consultar propuestas...
Route::get('consultar', function () {
	return view('propuestas.consultar.inicio');
});

Route::get('consultar', [	
	'as'			=>	'propuestas.consultar.inicio',
	'uses'			=>	'ProposalController@consultar'
]);

Route::get('proteccion-personal', function () {
	return view('proteccionpersonal.inicio');
});

/*Route::get('mapa-geografico', function () {
	return view('estadisticas.mapageografico.inicio');
});*/

Route::get('mapa-geografico', [
	'as'			=>	'mapa.index',
	'uses'			=>	'Admin\StatsController@showMap'
]);

/*Route::get('eje-tematico', function () {
	return view('estadisticas.ejetematico.inicio');
});*/

Route::get('eje-tematico', [
	'as'			=>	'grafico.index',
	'uses'			=>	'Admin\StatsController@showTopics'
]);

Route::get('respuestas-pendientes', [
	'as'			=> 'respuestas.index',
	'uses'			=> 'Admin\StatsController@showTop'
]);

Route::get('preguntas-frecuentes', function () {
	return view('preguntasfrecuentes.inicio');
});

//Rutas para formulario de contacto
Route::get('contacto', [
	'as'			=>	'contacto.index',
	'uses'			=>	'ContactFormController@index'
]);

Route::post('formulario/contacto', [
	'as'			=>	'contacto.guardar',
	'uses'			=>	'ContactFormController@store'
]);

//

Route::get('mapa-de-sitio', function () {
	return view('mapadesitio.inicio');
});

Route::get('terminos-de-uso', function () {
	return view('terminosdeuso.inicio');
});

Route::get('politicas-de-privacidad', function () {
	return view('politicasdeprivacidad.inicio');
});

Route::get('marco-legal', function () {
	return view('marcolegal.inicio');
});

Auth::routes();

//Rutas de administración de asignación de propuestas

//Route::resource('admin/propuestas','Admin\ProposalController');

Route::get('admin/propuestas', [
	'as'			=>	'propuestas.index',
	'uses'			=>	'Admin\ProposalController@index'
]);

Route::get('admin/propuestas/editar/{id}', [
	'as'			=>	'propuestas.edit',
	'uses'			=>	'Admin\ProposalController@edit'
]);

Route::patch('admin/propuestas/actualizar/{id}', [
	'as'			=>	'propuestas.update',
	'uses'			=>	'Admin\ProposalController@update'
]);

Route::get('admin/propuestas/mostrar/{id}', [
	'as'			=>	'propuestas.show',
	'uses'			=>	'Admin\ProposalController@show'
]);

Route::get('admin/cerrar/propuesta/{id}/', [
	'as'			=>	'propuestas.cerrar-propuesta',
	'uses'			=>	'Admin\ProposalController@cierre'
]);

Route::patch('admin/cerrar/propuestas/{id}', [
	'as'			=>	'propuestas.close',
	'uses'			=>	'Admin\ProposalController@cierrepropuesta'
]);

//Ruta para datos en el dashboard
Route::get('dashboard', [
	'as'			=>	'dashboard.inicio',
	'uses'			=>	'AdminController@dashboard'
]);

// Rutas de autenticación de usuarios administradores...
Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');
	Route::get('password/forgot/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
	Route::get('password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('password.request');
	Route::post('password/reset', 'Auth\AdminResetPasswordController@reset');
});

Route::get('/home', 'HomeController@index')->name('home');

//Rutas de administración de usuarios
Route::middleware('role:admin')->group(function() {
	Route::get('admin/usuarios', [
		'as'			=>	'usuarios.inicio',
		'uses'			=>	'AdminController@index'
	]);

	Route::get('crear/usuarios', [
		'as'			=>	'usuarios.crear',
		'uses'			=>	'AdminController@create'
	]);

	Route::post('guardar/usuarios', [
		'as'			=>	'usuarios.guardar',
		'uses'			=>	'AdminController@store'
	]);

	Route::get('mostrar/usuarios/{id}', [
		'as'			=>	'usuarios.mostrar',
		'uses'			=>	'AdminController@show'
	]);

	Route::get('editar/usuarios/{id}', [
		'as'			=>	'usuarios.editar',
		'uses'			=>	'AdminController@edit'
	]);

	Route::patch('actualizar/usuarios/{id}', [
		'as'			=>	'usuarios.actualizar',
		'uses'			=>	'AdminController@update'
	]);

	Route::get('eliminar/usuarios/{id}', [
		'as'			=>	'usuarios.eliminar',
		'uses'			=>	'AdminController@destroy'
	]);
});

//Rutas de administración de instituciones
Route::middleware('role:admin|manager|institutional_analyst')->group(function() {
	Route::get('admin/instituciones', [
		'as'			=>	'instituciones.inicio',
		'uses'			=>	'InstitutionController@index'
	]);

	Route::get('crear/institucion', [
		'as'			=>	'institucion.crear',
		'uses'			=>	'InstitutionController@create'
	]);

	Route::post('guardar/institucion', [
		'as'			=>	'institucion.guardar',
		'uses'			=>	'InstitutionController@store'
	]);

	Route::get('mostrar/institucion/{id}', [
		'as'			=>	'institucion.mostrar',
		'uses'			=>	'InstitutionController@show'
	]);

	Route::get('editar/institucion/{id}', [
		'as'			=>	'institucion.editar',
		'uses'			=>	'InstitutionController@edit'
	]);

	Route::patch('actualizar/institucion/{id}', [
		'as'			=>	'institucion.actualizar',
		'uses'			=>	'InstitutionController@update'
	]);

	Route::get('eliminar/institucion/{id}', [
		'as'			=>	'institucion.eliminar',
		'uses'			=>	'InstitutionController@destroy'
	]);

	//Route::resource('instituciones', 'InstitutionController');
});

//Rutas de administración de roles
Route::middleware('role:admin')->group(function() {
	Route::get('admin/roles',[
		'as'=>'roles.inicio',
		'uses'=>'RoleController@index']);

	Route::get('roles/create',[
		'as'=>'roles.create',
		'uses'=>'RoleController@create']);

	Route::post('roles/create',[
		'as'=>'roles.store',
		'uses'=>'RoleController@store']);

	Route::get('roles/{id}',[
		'as'=>'roles.show',
		'uses'=>'RoleController@show']);

	Route::get('roles/edit/{id}',[
		'as'=>'roles.edit',
		'uses'=>'RoleController@edit']);

	Route::patch('roles/{id}',[
		'as'=>'roles.update',
		'uses'=>'RoleController@update']);

	Route::delete('roles/{id}',[
		'as'=>'roles.destroy',
		'uses'=>'RoleController@destroy']);
});

// Rutas de administración de permisos
Route::middleware('role:admin')->group(function() {
	Route::get('admin/permisos',[
			'as'=>'permisos.inicio',
			'uses'=>'PermissionController@index']);

	Route::get('crear/permiso',[
		'as'=>'permisos.crear',
		'uses'=>'PermissionController@create']);

	Route::post('crear/permiso',[
		'as'=>'permisos.guardar',
		'uses'=>'PermissionController@store']);

	Route::get('editar/permiso/{id}',[
		'as'=>'permisos.editar',
		'uses'=>'PermissionController@edit']);

	Route::patch('actualizar/permiso/{id}',[
		'as'=>'permiso.actualizar',
		'uses'=>'PermissionController@update']);

	/*Route::delete('eliminar/permiso/{id}',[
		'as'=>'permiso.eliminar',
		'uses'=>'PermissionController@destroy']);*/

	Route::get('eliminar/permiso/{id}',[
		'as'=>'permiso.eliminar',
		'uses'=>'PermissionController@destroy']);
});

//Rutas para administración de banners, contenido y publicaciones
Route::middleware('role:admin|editor')->group(function() {	
	Route::get('admin/banners', [
		'as'			=>	'banners.inicio',
		'uses'			=>	'Admin\FrontPageController@bannerIndex'
	]);

	Route::get('crear/banner', [
		'as'			=>	'banner.crear',
		'uses'			=>	'Admin\FrontPageController@bannerCreate'
	]);

	Route::post('guardar/banner', [
		'as'			=>	'banner.guardar',
		'uses'			=>	'Admin\FrontPageController@bannerStore'
	]);

	Route::get('mostrar/banner/{id}', [
		'as'			=>	'banner.mostrar',
		'uses'			=>	'Admin\FrontPageController@bannerShow'
	]);

	Route::get('editar/banner/{id}', [
		'as'			=>	'banner.editar',
		'uses'			=>	'Admin\FrontPageController@bannerEdit'
	]);

	Route::patch('actualizar/banner/{id}', [
		'as'			=>	'banner.actualizar',
		'uses'			=>	'Admin\FrontPageController@bannerUpdate'
	]);

	/*Route::get('eliminar/banner', [
		'as'			=>	'banner.eliminar',
		'uses'			=>	'Admin\FrontPageController@bannerDestroy'
	]);*/

	Route::get('eliminar/banner/{id}',[
		'as'		=>		'banner.eliminar',
		'uses'		=>		'Admin\FrontPageController@bannerDestroy'
	]);

	//Rutas para administración de contenido
	Route::get('admin/contenido', [
		'as'			=>	'contenido.inicio',
		'uses'			=>	'Admin\FrontPageController@contentIndex'
	]);

	Route::get('crear/contenido', [
		'as'			=>	'contenido.crear',
		'uses'			=>	'Admin\FrontPageController@contentCreate'
	]);

	Route::post('guardar/contenido', [
		'as'			=>	'contenido.guardar',
		'uses'			=>	'Admin\FrontPageController@contentStore'
	]);

	// Rutas de administración de publicaciones
	Route::get('admin/publicaiones',[
		'as'=>'publicaciones.inicio',
		'uses'=>'PostController@index']);

	Route::get('crear/publicacion',[
		'as'=>'publicacion.crear',
		'uses'=>'PostController@create']);

	Route::post('crear/publicacion',[
		'as'=>'publicacion.guardar',
		'uses'=>'PostController@store']);

	Route::get('editar/publicacion/{id}',[
		'as'=>'publicacion.editar',
		'uses'=>'PostController@edit']);

	Route::patch('actualizar/publicacion/{id}',[
		'as'=>'publicacion.actualizar',
		'uses'=>'PostController@update']);

	Route::delete('eliminar/publicacion/{id}',[
		'as'=>'publicacion.eliminar',
		'uses'=>'PostController@destroy']);
});

Route::get('/usui', function(){
	$proposal = App\Proposal::findOrFail(5);
	return $proposal->topics;
	
	// $topics = App\Topic::all();

	// foreach($topics as $topic){
	// 	print_r("{$topic->name}</br>");
	// }
		
	// $proposal = App\Proposal::all();
	// dd($proposal);

	//$proposals = App\Proposal::topicsByProposals();

	//$topics = App\Topic::with(['proposals'])->get();
	//$topics = $proposals->topics;
	
	// foreach ($proposals as $proposal) {
	// 	print_r("</br></br></br>Propuesta #{$proposal->id}</br>");
	// 	foreach($proposal->topics as $topic){
	// 		print_r("{$topic->name}</br>");
	// 	}
		
	// }
	
	//return $proposals;

});