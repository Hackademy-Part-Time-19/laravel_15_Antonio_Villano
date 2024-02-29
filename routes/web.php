<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\SearchPosts;
use App\Livewire\SearchUsers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/counter', Counter::class);
Route::get('/search', SearchUsers::class)->name('search');
Route::get('/posts', SearchPosts::class)->name('posts');
