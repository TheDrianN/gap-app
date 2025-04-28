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

Route::get('/projects/process', function () {
    return view('projects.process');
})->name('projects.process');

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

Route::get('/proposal/viewmore', function () {
    return view('proposal.viewmore');
})->name('proposal.viewmore');

Route::get('/proposal/listproposal', function () {
    return view('proposal.listmyproposal');
})->name('proposal.mylistproposal');

Route::get('/proposal/myproposal', function () {
    return view('proposal.myproposal');
})->name('proposal.myproposal');

Route::get('/proposal/create', function () {
    return view('proposal.create');
})->name('proposal.create');


Route::get('/posts/create', function () {
    return view('post.create');
})->name('posts.create');

Route::get('/posts', function () {
    return view('post.index');
})->name('posts.index');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

Route::post('/register-freelancer/step1', [AuthController::class, 'showRegisterForm'])->name('auth.registerFreelancer.step1');
