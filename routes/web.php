<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;

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

Route::get('/', [ViewController::class, 'home'])->name('user.home');
Route::get('/form', [ViewController::class, 'form'])->name('user.create');
Route::post('/job-match', [UserController::class, 'store'])->name('user.store');
// Route::get('/output', [UserController::class, 'store']);