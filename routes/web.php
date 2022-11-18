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

Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::delete('/user/action/{user}', [UserController::class, 'delete'])->name('location.delete');


Route::get('/location', [LocationController::class, 'index'])->name('location');
Route::get('/location/{location}', [LocationController::class, 'show'])->name('location.show');
Route::post('/location/store', [LocationController::class, 'store'])->name('location.store');
Route::get('/location/{location}/maps', [LocationController::class, 'maps'])->name('location.maps');
Route::delete('/location/action/{location}', [LocationController::class, 'delete'])->name('location.delete');


Route::get('/point', [PointController::class, 'index'])->name('point');
Route::get('/point/map/{point}', [PointController::class, 'map'])->name('point.map');
Route::get('/point/create', [PointController::class, 'create'])->name('point.create');
Route::post('/point/store', [PointController::class, 'store'])->name('point.store');
Route::delete('/point/action/{point}', [PointController::class, 'delete'])->name('point.delete');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');