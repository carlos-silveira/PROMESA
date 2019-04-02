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
  Route::get('/aspirantes', 'Portal\AspirantesController@index');
  Route::get('/calificaciones', 'Portal\CalificacionesController@index');
  Route::get('/docentes', 'Portal\DocentesController@index');
  Route::get('/grupos', 'Portal\GruposController@index');
  Route::get('/materias', 'Portal\MateriasController@index');
  Route::get('/personal', 'Portal\PersonalController@index');
});
