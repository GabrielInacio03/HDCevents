<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

//create
Route::get('/events/create', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store']);

//edit
Route::get('/events/edit/{id}', [EventController::class,'edit']);
Route::put('/events/edit/{id}', [EventController::class, 'update']);

//show
Route::get('/events/{id}', [EventController::class,'show']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
