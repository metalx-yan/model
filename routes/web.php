<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
<<<<<<< HEAD
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
=======
<<<<<<< HEAD
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
=======
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
>>>>>>> a8c56e09facff8c567d2a575a6751f6e750a52ea
>>>>>>> 1f07036a857f5e6f8719afd517355e7bef1e781e
|
*/

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
=======
<<<<<<< c64f2eb84f3484b8bb20b3acbf08110591d27f2a
<<<<<<< HEAD

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
=======
>>>>>>> a8c56e09facff8c567d2a575a6751f6e750a52ea
=======

Route::get('/dashboard', 'HomeController@index');

>>>>>>> "Registrasi dua tahap, view seadanya"
>>>>>>> 1f07036a857f5e6f8719afd517355e7bef1e781e
