<?php

use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Home;
use App\Livewire\Portofolio;
use App\Livewire\Services;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/services', Services::class)->name('services');
Route::get('/about', About::class)->name('about');
Route::get('/portofolio', Portofolio::class)->name('portofolio');
Route::get('/contact', Contact::class)->name('contact');
