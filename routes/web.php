<?php

use App\Livewire\Counter;
use App\Livewire\PostList;
use Illuminate\Support\Facades\Route;

Route::get('/', Counter::class)->name('home');
Route::get('/posts', PostList::class)->name('posts');