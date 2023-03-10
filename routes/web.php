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
    return view('client.pages.index');
});

Route::view('/login', 'auth.login');
Route::view('/register', 'auth.register');
Route::view('/profile', 'admin.pages.profile');
Route::view('/dashboard', 'admin.pages.dashboard')->name('dashboard');
Route::view('/tables', 'admin.pages.tables');
Route::view('/billing', 'admin.pages.billing');


Route::view('/services', 'client.pages.services');
Route::view('/about', 'client.pages.about');
Route::view('/contact', 'client.pages.contact');
Route::view('/elements', 'client.pages.elements');
