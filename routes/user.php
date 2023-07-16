<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard;
use App\Http\Livewire\Addcostumer;
use App\Http\Livewire\Costumer;
use App\Http\Livewire\Editcostumer;
use Illuminate\Support\Facades\Route;

// Sistem login tipe user
Route::prefix('user')->name('user.')->group(function(){
    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
        Route::view('/login','authentication.user.login')->name('login');
        Route::view('/register','authentication.user.register')->name('register');
        Route::post('/create',[AuthController::class,'create'])->name('create');
        Route::post('/check',[AuthController::class,'check'])->name('check');
        Route::get('/verify',[AuthController::class,'verify'])->name('verify');

        Route::get('/password/forgot',[AuthController::class,'showForgotForm'])->name('forgot.password.form');
        Route::post('/password/forgot',[AuthController::class,'sendResetLink'])->name('forgot.password.link');
        Route::get('/password/reset/{token}',[AuthController::class,'showResetForm'])->name('reset.password.form');
        Route::post('/password/reset',[AuthController::class,'resetPassword'])->name('reset.password');
    });

    Route::middleware(['auth:web','is_user_verify_email','PreventBackHistory'])->group(function(){
        Route::get('/dashboard',[Dashboard::class,'index'])->name('dashboard');
        // Pengelolaan data costumer
        Route::get('/all-costumer', Costumer::class)->name('costumer');
        Route::get('/all-costumer/add', Addcostumer::class)->name('all-costumer.add');
        Route::get('/all-costumer/edit/{costumer_id}', Editcostumer::class)->name('all-costumer.edit');
        Route::post('/logout',[AuthController::class,'logout'])->name('logout');
    });
});