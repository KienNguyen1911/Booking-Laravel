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
})->name('index');

Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register');
Route::view('/profile', 'admin.pages.profile')->name('profile');
Route::view('/dashboard', 'admin.pages.dashboard')->name('dashboard');
Route::view('/tables', 'admin.pages.tables')->name('tables');
Route::view('/billing', 'admin.pages.billing')->name('billing');


Route::view('/services', 'client.pages.services')->name('services');
Route::view('/about', 'client.pages.about')->name('about');
Route::view('/contact', 'client.pages.contact')->name('contact');
Route::view('/elements', 'client.pages.elements')->name('elements');
