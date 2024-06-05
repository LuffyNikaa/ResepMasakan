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

