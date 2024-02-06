<?php

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
    return view('auth.login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/votes', [App\Http\Controllers\votesController::class, 'votes'])->name('layouts.votes');
Route::get('/candidates', [App\Http\Controllers\candidatesController::class, 'candidates'])->name('layouts.candidates');
Route::get('/voters', [App\Http\Controllers\votersController::class, 'voters'])->name('layouts.voters');
Route::get('/positions', [App\Http\Controllers\positionsController::class, 'positions'])->name('layouts.positions');
Route::get('/bulletcandidates', [App\Http\Controllers\bulletcandidatesController::class, 'bulletcandidates'])->name('layouts.bulletcandidates');
Route::get('/electiontitle', [App\Http\Controllers\electiontitleController::class, 'electiontitle'])->name('layouts.electiontitle');
Route::get('/dashboard', [App\Http\Controllers\dashboardController::class, 'dashboard'])->name('layouts.dashboard');