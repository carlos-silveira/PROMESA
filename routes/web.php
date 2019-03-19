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

Route::get('/galeria', function () {
    return view('frontend.site.gallery');
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
Route::get('/about', function () {
    return view('frontend.site.about');
});
