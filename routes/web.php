<?php

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

/*Route::get('/', function () {
    return view('home');
});*/

Route::get(
    '/',
    [\App\Http\Controllers\JobPostingController::class, 'index']
)->name('home');

Route::get(
    '/vagas',
    [\App\Http\Controllers\JobPostingController::class, 'index']
)->name('jobposting.index');

Route::get(
    '/vagas/{slug}',
    [\App\Http\Controllers\JobPostingController::class, 'show']
)->name('jobposting.show');

Route::get(
    '/vagas/{slug}/candidatar',
    [\App\Http\Controllers\JobApplyController::class, 'create']
)->middleware(['auth'])->name('jobapply.create');

Route::post(
    '/vagas/candidatar/cadastrar',
    [\App\Http\Controllers\JobApplyController::class, 'store']
)->middleware(['auth'])->name('jobapply.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
