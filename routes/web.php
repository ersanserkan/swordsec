<?php

use App\Http\Controllers\SwordsecController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('/logout', function () {
    Auth::logout();

    request()->session()->invalidate();

    request()->session()->regenerateToken();

    return redirect('/');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [SwordsecController::class, 'dashboard'])->name('dashboard');
    Route::get('first-page', [SwordsecController::class, 'firstPage'])->name('page.first');
    Route::get('second-page', [SwordsecController::class, 'secondPage'])->name('page.second');
});
