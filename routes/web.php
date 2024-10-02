<?php

use App\Models\Proveedor;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Proveedors;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',
])->group(function () {
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/welcome', function () {
        return view('welcome');
    })->name('welcome');
});


