<?php

//use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');
Route::view('/quienes-somos','about')->name('about');
Route::view('/servicios', 'services')->name('services');
Route::view('/contacto', 'contact')->name('contact');

Auth::routes();
