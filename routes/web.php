<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaucetController;
use App\Http\Controllers\AboutController;

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
    return view('home');
});

Route::get('your-url', function () {
    $pageTitle = 'Page title';

    return view('heroPage', ['page_title' => $pageTitle]);
});

Route::get('/faucet', [FaucetController::class, 'index'])->name('faucet');

Route::get('/about', [AboutController::class, 'index'])->name('about');
