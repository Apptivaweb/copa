<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/copa-america', [App\Http\Controllers\FrontController::class, 'copaamerica']);
Route::get('/copa-america/{equipo}', [App\Http\Controllers\FrontController::class, 'equipo']);

//Route::get('/copa-america', [App\Http\Controllers\FrontController::class, 'campeonato']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
