<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClienteController;

Route::view('/', 'home')->name('home');
Route::view('/servicios', 'servicios')->name('servicios');
Route::view('/proyectos', 'proyectos')->name('proyectos');
Route::view('/blog', 'blog')->name('blog');
Route::view('/contacto', 'contacto')->name('contacto');

Route::resource('clientes', ClienteController::class);

Auth::routes(['register' => false]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
