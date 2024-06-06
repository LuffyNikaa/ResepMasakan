<?php

use App\Http\Controllers\ResepController;
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
    return view('index');
});

Route::get('/resep', function () {
    return view('resep');
});

Route::get('/resep1', function () {
    return view('resep1');
});

Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/artikel1', function () {
    return view('artikel1');
});

Route::get('/favorit', function () {
    return view('favorit');
});

Route::get('/login', function () {
    return view('login');
});
Route::get("/resep", [\App\Http\Controllers\ResepController::class,'index']);

Route::get('/resep/{judul}', [ResepController::class, 'showDetail'])->name('resep1');

Route::get('/resep2', function () {
    return view('resep2');
});

Route::get('/resep3', function () {
    return view('resep3');
});

Route::get('/resep4', function () {
    return view('resep4');
});

Route::get('/resep5', function () {
    return view('resep5');
});

Route::get('/resep6', function () {
    return view('resep6');
});

Route::get('/resep7', function () {
    return view('resep7');
});

Route::get('/resep8', function () {
    return view('resep8');
});

Route::get('/resep9', function () {
    return view('resep9');
});

Route::get('/resep10', function () {
    return view('resep10');
});