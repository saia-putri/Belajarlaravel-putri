<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postcontroller;
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



Route::get('/editstts', function () {
    return view('editstts');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/home', [postcontroller::class, 'index']);
Route::get('/createstts', [postcontroller::class, 'create']);
Route::post('/saveblog', [postcontroller::class, 'store']);
Route::get('/edit/{id}', [postcontroller::class, 'edit']);
Route::put('/updateblog/{id}', [postcontroller::class, 'update']);
Route::get('/delete/{id}', [postcontroller::class, 'destroy']);
