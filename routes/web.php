<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;


Route::get('/',[RegistrationController::class,'index'])->name('home');  
Route::post('/registration-store',[RegistrationController::class,'store'])->name('store');  
Route::get('/registration/{child}/success', [RegistrationController::class, 'success'])->name('success');
Route::get('/get-states', [RegistrationController::class, 'getStates']);