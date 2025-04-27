<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::get('/show/{type}', [AuthController::class, 'showForm'])->name('showForm');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home.index');
})->name('home');

Route::get('/projects', function () {
    return view('projects.index');
})->name('projects.index');

Route::get('/messages', function () {
    return view('messages.index');
})->name('messages.index');

Route::get('/notifications', function () {
    return view('notifications.index');
})->name('notifications.index');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/proposal', function () {
    return view('proposal.index');
})->name('proposal.index');


Route::get('/posts/create', function () {
    return view('post.create');
})->name('posts.create');

Route::get('/posts', function () {
    return view('post.index');
})->name('posts.index');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
