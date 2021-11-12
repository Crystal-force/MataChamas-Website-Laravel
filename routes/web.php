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

Route::get('/', 'HomeController@Index');

Route::get('/login', 'Auth\LoginController@Index')->name('login');
Route::get('/register', 'Auth\RegisterController@Index')->name('register');

Route::get('/dashboard', 'Auth\LoginController@Login');
