<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ClotheController;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/clothe/store', [ClotheController::class, 'store'])->name('ClotheStore');




Route::get('/clothes', function () {
    return view('clothes');
})->name('clothes');


Route::get('/', [MasterController::class, 'index'])->name('home');


require __DIR__.'/auth.php';
