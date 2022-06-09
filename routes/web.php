<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Log;
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
    return redirect()->to(url('login'));
});

Route::group(["middleware" => ["auth"]], function(){

    Route::get('dashboard',[HomeController::class,'dashboard']);
    Route::resource('company',CompanyController::class);
    Route::resource('employee',EmployeesController::class);
});

Route::group(['middleware' => 'Language'], function () {
    Route::get('/language',[HomeController::class,'language']);
    Route::get('/change-language/{lang}',[HomeController::class,'changeLang']);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
