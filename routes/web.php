<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\ValidUser;
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

Route::get('/register', function () {
    return view('register');
})->name('register')->middleware(ValidUser::class);

Route::post('/saveRegisterInfo', [UserController::class, 'register'])->name('saveRegisterInfo');


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/saveLoginInfo', [UserController::class, 'login'])->name('saveLoginInfo');


Route::get('/dashboard', [UserController::class, 'dashboardPage'])
    ->name('dashboard')->middleware(ValidUser::class);
// ->middleware(['auth']);

Route::get('/logout', [UserController::class, 'logout'])->name('logout');
