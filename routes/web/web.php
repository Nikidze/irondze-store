<?php

use Illuminate\Support\Facades\Route;
Route::group(['middleware' => ['web', 'adminauth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {

// Вход
Route::get('/login', 'Admin\AuthController@form')->name('login.form');
Route::post('/login', 'Admin\AuthController@login')->name('login');

// Выход
Route::any('/exit', 'Admin\AuthController@exit')->name('exit');

// Страницы админки
Route::get('/index', 'Admin\DashboardController')->name('dashboard');

});