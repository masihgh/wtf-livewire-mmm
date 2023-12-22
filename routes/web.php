<?php

use App\Http\Controllers\LogoutController;
use App\Livewire\Auth\Login as LoginPage;
use App\Livewire\Auth\Register as RegisterPage;
use App\Livewire\User\Dashboard as UserDashboard;
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

Route::get('', UserDashboard::class)->middleware('auth:web')->name('user.dashboard');
Route::get('auth/login', LoginPage::class)->middleware('guest')->name('login');
Route::get('auth/register', RegisterPage::class)->middleware('guest')->name('register');
Route::post('logout', [LogoutController::class, 'logout'])->middleware('auth:web')->name('logout');
