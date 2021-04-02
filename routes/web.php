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
Route::permanentRedirect('/', 'login');

Route::middleware('auth')->group(function () {
    Route::view('/dashboard', 'content.admin.dashboard.index');
    Route::view('/user', 'content.admin.user.index');
});
