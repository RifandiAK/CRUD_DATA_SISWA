<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::resource('/posts',\App\Http\Controllers\PostController::class);
Route::resource('/crud',\App\Http\Controllers\crudController::class);



Route::get('/', function () {
    return view('siswa');
});
Route::get('/siswa', function () {
    return view('siswa');
});
Route::get('/murid', function () {
    return view('murid');
});
Route::get('/home', function () {
    return view('welcome');
});
Route::get('/p', function () {
    return view('p');
});
Route::get('/hello', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Mari belajar laravel</p>';
});
Route::get('/siswa/rpl/mige', function () {
    echo '<h1 style="text-align: center">Welcome To Laravel,Mige</h1>';
});
