<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\ArticleIndex::class)->name('home');
//Route::get('/search', \App\Livewire\Search::class);
Route::get('/articles/{article}', \App\Livewire\ShowArticle::class);
Route::get('/dashboard', \App\Livewire\Dashboard::class)->name('dashboard');
Route::get('/dashboard/articles', \App\Livewire\ArticleList::class)->name('articles.index');
Route::get('/dashboard/articles/create', \App\Livewire\ArticleCreate::class)->name('articles.create');
Route::get('/dashboard/articles/{article}/edit', \App\Livewire\ArticleEdit::class)->name('articles.edit');

//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified',
//])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
//});
