<?php

use Illuminate\Support\Facades\Route;
use App\Models\apostar;
use App\Models\aventos;
use App\Models\equipos;
use App\Models\ligas;
use App\Models\recargas;
use App\Models\usuarios;

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
Route::get('/apostar', function () {
    return apostar::All();
});
Route::get('/aventos', function () {
    return aventos::All();
});
Route::get('/equipos', function () {
    return ligas::All();
});
Route::get('/ligas', function () {
    return ligas::All();
});
Route::get('/recargas', function () {
    return recargas::All();
});
Route::get('/usuarios', function () {
    return usuarios::All();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
