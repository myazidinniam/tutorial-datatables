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

// Route ini dibuat untuk memanggil method UserJson didalam class UserController
Route::get('/', function () {
    return view('welcome');
});
Route::get('/UserJson', 'UserController@UserJson');



// Route ini dibuat untuk memanggil method ArtikelJson didalam class ArtikelController
Route::get('/datatablesjointable', function () {
    return view('datatablesjointable/index');
});
Route::get('/ArtikelJson', 'ArtikelController@ArtikelJson');
