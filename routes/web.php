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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function(){
  return view('welcome');
});
Route::get('/trabajos', function(){
  return view('trabajosrealizados');
} );
Route::get('/quienessomos', function(){
  return view('quienessomos');
} );
Route::get('/servicios', function(){
  return view('servicios');
} );
Route::get('/nuestrosclientes', function(){
  return view('nuestrosclientes');
});
Route::get('/staff', function(){
  return view('staff');
});

Route::get('/contacto', function(){
  return view('contacto');
});
