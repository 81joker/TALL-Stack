<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::view('/', 'welcome')->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('notes', 'notes.index')
->middleware(['auth', 'verified'])
->name('notes.index');

Route::view('note/create', 'notes.create')
->middleware(['auth', 'verified'])
->name('notes.create');

Volt::route('notes/{note}/edit','notes.edit-note')
->middleware(['auth'])
->name('notes.edit');

require __DIR__.'/auth.php';
