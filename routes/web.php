<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'ProspectoController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')
->name('home');

Route::get('/inicio', 'ProspectoController@index')
->name('inicio');

Route::post('/prospectos/store', 'ProspectoController@store')
->name('prospecto.store');

Route::delete('/prospectos/destroy/{prospecto}', 'ProspectoController@destroy')->name('prospecto.destroy');


