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
Route::get('http://www.autoenergy.cl', function () {
    return view('public.index.php');
});

Route::get('/', function () {
    return view('public.index.php');
});

Route::get('/public', function(){
        return view('public.index.php');
});
/*Retornos para el inicio*/

Route::get('/contacto', 'correoController@index');
Route::get('test-mail', 'HomeController@testMail');





Route::get('contacto', 'correoController@index');