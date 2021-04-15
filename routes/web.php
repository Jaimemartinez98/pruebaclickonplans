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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/addlibro', [App\Http\Controllers\HomeController::class, 'index1'])->name('addlibro');
Route::get('/addfiltro', [App\Http\Controllers\HomeController::class, 'index2'])->name('addfiltro');
Route::get('/verfiltro', [App\Http\Controllers\HomeController::class, 'filtro'])->name('verfiltro');

Route::get('/verlibro/{id}', 'App\Http\Controllers\HomeController@edit1')->name('editar1');

Route::post('/agregar', 'App\Http\Controllers\LibrosController@store')->name('store'); 

Route::get('/listlibros', 'App\Http\Controllers\LibrosController@index')->name('leer'); 
Route::get('/destroy/{id}', 'App\Http\Controllers\LibrosController@destroy')->name('borrar'); 