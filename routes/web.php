<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PointController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Auth::routes();

Route::get('/location', [LocationController::class, 'index'])->name('location');
Route::get('/location/{location}', [LocationController::class, 'show'])->name('location.show');
Route::post('/location/store', [LocationController::class, 'store'])->name('location.store');


Route::get('/point', [PointController::class, 'index'])->name('point');
Route::get('/point/maps/{point}', [PointController::class, 'maps'])->name('point.maps');
Route::get('/point/create', [PointController::class, 'create'])->name('point.create');
Route::post('/point/store', [PointController::class, 'store'])->name('point.store');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');