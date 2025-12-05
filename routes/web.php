<?php

use Illuminate\Support\Facades\Route;

Route::get('/landing', \App\Livewire\Landing::class)->name('landing');
Route::get('/', \App\Livewire\Index::class)->name('index')->middleware('auth');
Route::get('/profile', \App\Livewire\Profile::class)->name('profile')->middleware('auth');
Route::get('/users', \App\Livewire\Table\UserTable::class)->name('table.users')->middleware('auth');

Route::get('/bibit', \App\Livewire\Table\BibitTable::class)->name('table.bibit')->middleware('auth');

Route::get('/dashboard', \App\Livewire\Dashboard::class)->name('dashboard')->middleware('auth');

Route::get('/login', \App\Livewire\Login::class)->name('login');
Route::get('/logout', App\Http\Controllers\LogoutController::class)->name('logout');
