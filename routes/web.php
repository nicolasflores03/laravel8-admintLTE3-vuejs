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
    return view('auth/login');
});

// Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/**********Companies**********/
Route::get('/company', [App\Http\Controllers\CompanyController::class, 'index']);
Route::get('/config/companies/getAllCompany', [App\Http\Controllers\CompanyController::class, 'getAllCompany']);
