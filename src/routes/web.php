<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index');
});
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/thanks',[ContactController::class, 'store']);