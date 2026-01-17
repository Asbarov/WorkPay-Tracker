<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('auth');
});

Route::get('/login','App\Http\Controllers\AuthController@showLoginForm');
Route::post('/login','App\Http\Controllers\AuthController@login');
Route::post('/logout','App\Http\Controllers\AuthController@logout');

Route::get('/register',"App\Http\Controllers\AuthController@showRegisterForm");
Route::post('/register','App\Http\Controllers\AuthController@register');

Route::get('/dashboard',function (){
    return view('dashboard');
});

