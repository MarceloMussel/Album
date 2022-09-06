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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [App\Http\Controllers\ControladorFoto::class, 'index']);
Route::post('/', [App\Http\Controllers\ControladorFoto::class, 'store']);
Route::delete('/{id}', [App\Http\Controllers\ControladorFoto::class, 'destroy']);
Route::get('/download/{id}', [App\Http\Controllers\ControladorFoto::class, 'download']);