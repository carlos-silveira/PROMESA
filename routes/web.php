<?php

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
// Site Routes
Route::get('/', function () {
    return view('frontend.site.index');
});
//Main Site Routes

Route::get('/about', function () {
    return view('frontend.site.about');
});
Route::get('/contact', function () {
    return view('frontend.site.contact');
});
Route::get('/course-single', function () {
    return view('frontend.site.course-single');
});
Route::get('/courses', function () {
    return view('frontend.site.courses');
});
Route::get('/events', function () {
    return view('frontend.site.events');
});
Route::get('/galeria', function () {
    return view('frontend.site.gallery');
});
Route::get('/news', function () {
    return view('frontend.site.news');
});
Route::get('/register', function () {
    return view('frontend.site.register');
});
Route::get('/teachers', function () {
    return view('frontend.site.teachers');
});
Auth::routes();

// Dashboard Routes
Route::group(['prefix' => 'portal', 'as' => 'portal'], function() {
  Route::get('/', 'Portal\PortalController@index');

  Route::get('/alumnos', 'Portal\AlumnosController@index');
  Route::delete('/alumnos/{id}', 'Portal\AlumnosController@destroy');
  Route::post('/alumnos', 'Portal\AlumnosController@store');
  Route::post('/alumnos/update', 'Portal\AlumnosController@update');

  Route::get('/aspirantes', 'Portal\AspirantesController@index');
  Route::delete('/aspirantes/{codigo_de_curso}', 'Portal\AspirantesController@destroy');
  Route::post('/aspirantes', 'Portal\AspirantesController@store');
  Route::post('/aspirantes/update', 'Portal\AspirantesController@update');

  Route::get('/calificaciones', 'Portal\CalificacionesController@index');
  // Route::post('/calificaciones', 'Portal\CalificacionesController@store');

  Route::get('/docentes', 'Portal\DocentesController@index');
  Route::post('/docentes', 'Portal\DocentesController@store');
  Route::post('/docentes/update', 'Portal\DocentesController@update');
  Route::delete('/docentes/{id}', 'Portal\DocentesController@destroy');

  Route::get('/grupos', 'Portal\GruposController@index');
  // Route::post('/grupos', 'Portal\GruposController@store');
  Route::get('/materias', 'Portal\MateriasController@index');
  // Route::store('/materias', 'Portal\MateriasController@store');
  Route::get('/personal', 'Portal\PersonalController@index');
  // Route::post('/personal', 'Portal\PersonalController@store');
});
