<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Middleware\CheckRole;
use App\Http\Controllers\Api\ApiNewsController;
use App\Http\Controllers\Admin\AdminNewsController;

Route::get('/', function () {
    return view('welcome');
});

$router->group(['prefix' => 'api'], function ($router) {
    Route::get('/news', [ApiNewsController::class, 'index']);
});

Route::get('/news', [NewsController::class, 'index'])->name('news.indexs');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.shows');


Route::get('/login', [AuthController::class, 'loginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'registerForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/news-add', [NewsController::class, 'addNewsForm'])->name('news.creates');
Route::post('/news-add', [NewsController::class, 'store'])->name('news.stores');


Route::middleware([CheckRole::class])->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('/admin/users', UserController::class)->names('admin.users');
    Route::resource('/admin/news', AdminNewsController::class)->names('admin.news');
});

