<?php

use App\Http\Controllers\RespondentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/get-gender', [RespondentController::class, 'get_gender'])->name('gender');
Route::get('/filter-by-gender/{gender}', [RespondentController::class, 'get_data_by_gender'])->name('filter-by-gender');
Route::get('/filter-by-customer/{type}', [RespondentController::class, 'get_data_by_account_holder'])->name('filter-by-customer');
Route::get('/filter-by-purpose/{purpose}', [RespondentController::class, 'get_data_by_account_holder'])->name('filter-by-customer');
Route::post('/register',[UserController::class, 'register'])->name('register');
Route::post('/login',[UserController::class, 'login'])->name('login');
