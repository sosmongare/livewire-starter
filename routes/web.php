<?php

use App\Livewire\Lazy;
use App\Livewire\BirdForm;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', BirdForm::class);
Route::get('/lazy', Lazy::class);