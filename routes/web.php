<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Student\StudentController;

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
    Route::view('/landing-users', 'content.admin.user.index');
    Route::resource('students', StudentController::class);
});
