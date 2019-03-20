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
//Dashboard Routes
Route::get('/login', function () {
    return view('frontend.dashboard.login');
});
Route::get('/portal', function () {
    return view('frontend.dashboard.index');
});
Route::get('/portal/alumnos', function () {
    return view('frontend.dashboard.alumnos');
});
Route::get('/portal/aspirantes', function () {
    return view('frontend.dashboard.aspirantes');
});
Route::get('/portal/docentes', function () {
    return view('frontend.dashboard.docentes');
});
Route::get('/portal/personal', function () {
    return view('frontend.dashboard.personal');
});
Route::get('/portal/materias', function () {
    return view('frontend.dashboard.materias');
});
Route::get('/portal/calificaciones', function () {
    return view('frontend.dashboard.calificaciones');
});
Route::get('/portal/grupos', function () {
    return view('frontend.dashboard.grupos');
});
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
